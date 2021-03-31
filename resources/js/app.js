require('./bootstrap');

Echo.channel('my-channel-1')
    .listen('my-event', (e) => {
        console.log(e);
    });
