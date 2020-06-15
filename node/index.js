const AWS = require('aws-sdk');

AWS.config.logger = console;

const s3 = new AWS.S3();

const callList = () => {
    s3.listBuckets({},(err,data) => {
        console.log(JSON.stringify({ ...data, Buckets: [data.Buckets[0]]}));
    });
}

setInterval(callList, 60*process.env.INTERVAL_TIME);