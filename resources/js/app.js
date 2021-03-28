require('./bootstrap');

console.log(111111111111111);
Echo.join(`test.channel`)


Echo.channel('my-channel-1')
    .listen('my-event', (e) => {
        console.log(e);
    });

Echo.channel('user')
    .listen('UserUpdate', (e) => {
        console.log(e);
    });