<?php

class Order
{
	protected $number;
	private $eventBus;

	public function __construct(EventBus $eventBus)
	{
		$this->number = rand(10000, 20000);
		$this->eventBus = $eventBus;
	}

	public function save(): void
	{
		echo "Order number {$this->number} was saved\n";
		$this->eventBus->publish('onOrderSave', $this);
	}

	public function getNumber(): string
	{
		return $this->number;
	}
}

class TelegramSender
{
	public function send($message): void
	{
		echo "Message was sent via telegram: {$message}\n";
	}
}

class EmailSender
{
	public function send($message): void
	{
		echo "Message was sent via e-mail: {$message}\n";
	}
}

class EventBus
{
    private $subscriptions = [];

    public function subscribe(string $eventType, callable $eventHandler): void
    {
        if(!isset($this->subscriptions[$eventType]))
        {
            $this->subscriptions[$eventType] = [];
        }

        $this->subscriptions[$eventType][] = $eventHandler;
    }

    public function publish(string $eventType, $data): void
    {
        if(is_array($this->subscriptions[$eventType]))
        {
            foreach ($this->subscriptions[$eventType] as $eventHandler)
            {
                $eventHandler($data);
            }
        }
    }
}

$email = new EmailSender();
$telegram = new TelegramSender();
$eventBus = new EventBus();

$order = new Order($eventBus);

$eventBus->subscribe(
    'onOrderSave',
    function (Order $order) use ($telegram)
    {
        $telegram->send("Your order number is {$order->getNumber()}");
    }
);

$eventBus->subscribe(
    'onOrderSave',
    function (Order $order) use ($email)
    {
        $email->send("Your order number is {$order->getNumber()}");
    }
);

$order->save();

/*
 * Необходимо воспользоваться шаблоном проектирования "Издатель подписчик"
 * Чтобы при каждом сохранении заказа
 * $order->save();
 * сообщения об этом отправлялись через
 * TelegramSender и EmailSender
 */
