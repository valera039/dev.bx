class Logger
{
	private static instance : Logger;
	private count = 0;
	private constructor()
	{
	}
	public static getInstance() : Logger
	{
		if (!Logger.instance)
		{
			Logger.instance = new Logger();
		}
		return Logger.instance;
	}
	public log( message : string)
	{
		this.count++;
		let date = new Date();
		console.log(`${this.count} ${date} : ${message}`);
	}
}

class LogUser
{
	protected name : string;
	public constructor(name)
	{
		this.name = name;
	}
	public method()
	{
		Logger.getInstance().log(`Log user ${this.name}`);
	}
}

function test()
{
	let firstUser = new LogUser('John');
	let secondUser = new LogUser('Martin');
	firstUser.method();
	secondUser.method();
	secondUser.method();
	firstUser.method();
}

test();