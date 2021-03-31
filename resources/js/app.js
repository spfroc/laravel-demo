require('./bootstrap');

console.log(22222);
Echo.channel('user_notify_1')
    .listen('OrderStatusChanged', (e) => {
        console.log(11111111);
        console.log(e);
    }).notification((notification) => {
    console.log(notification);
});
console.log(33333);
