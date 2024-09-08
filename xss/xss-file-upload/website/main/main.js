//Every Lapp code must have a 'main' function, that accepts following 3 parameters:
//  * queryString : contains request query string parameters as a JSON object
//  * body: contains request body as a JSON object
// ** callback - is a function which you need to call to return response to the API caller.
//     If you fail to call this, your code will still work but request will be logged as failure.

function main(queryString, body, callback) {
//write a simple log
ls.log.Info('entering Lapp...');

//pass additional JSON object to log
ls.log.Info('body is : ', body);

//access setting
let sampleSetting = ls.SETTINGS.sample_setting;

//store value in DB
ls.db.Put('key1','value', function(err,res){
if(err){
ls.log.Error('Error occurred while storing key in DB', err);
} else {
ls.log.Info('Key-Value stored in DB', res);
//now let's try to get this value back from DB
ls.db.Get('key1', function(err,res){
if(err){
ls.log.Error('Error occurred while fetching value from DB', err);
} else {
ls.log.Info('Completed Get DB response', res);
let fetchedValue =  res.Data.Value;
ls.log.Info('Fetched Value from DB', fetchedValue);
}
});
}
});

//call another function. Please note that ls.db.Put and this next function will execute
    //asynchronously i.e. anotherFunction will not wait for ls.db.Put to get completed.
anotherFunction(sampleSetting, function(error, data) {
if (error) {
ls.log.Error('something went wrong : ', error);
//return error response to API caller
callback(error, null);
} else {
ls.log.Info('function succeeded');
//return success response to API caller
callback(null, data);
}
});
}

function anotherFunction(param, callback) {
ls.log.Info('log inside anotherFunction, param : ', param);
//return success message with error as null
callback(null, 'anotherFunction succeeded');
}