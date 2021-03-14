var Logger = /** @class */ (function () {
    function Logger() {
        this.count = 0;
    }
    Logger.getInstance = function () {
        if (!Logger.instance) {
            Logger.instance = new Logger();
        }
        return Logger.instance;
    };
    Logger.prototype.log = function (message) {
        this.count++;
        var date = new Date();
        console.log(this.count + " " + date + " : " + message);
    };
    return Logger;
}());
var LogUser = /** @class */ (function () {
    function LogUser(name) {
        this.name = name;
    }
    LogUser.prototype.method = function () {
        Logger.getInstance().log("Log user " + this.name);
    };
    return LogUser;
}());
function test() {
    var firstUser = new LogUser('John');
    var secondUser = new LogUser('Martin');
    firstUser.method();
    secondUser.method();
    secondUser.method();
    firstUser.method();
}
test();
