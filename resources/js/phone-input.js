document.getElementById('phone').addEventListener('input', function (event) {
    let input = event.target.value.replace(/\D/g, '');

    if (input === '') {
        event.target.value = '+48';
        return;
    }

    if (input.length <= 2) {
        event.target.value = `+48`;
        return;
    }

    if (!input.startsWith('48')) {
        input = '48' + input;
    }

    let formattedNumber = `+${input.slice(0, 2)}`;
    if (input.length > 2) {
        formattedNumber += ` ${input.slice(2, 5)}`;
    }
    if (input.length > 5) {
        formattedNumber += ` ${input.slice(5, 8)}`;
    }
    if (input.length > 8) {
        formattedNumber += ` ${input.slice(8, 11)}`;
    }

    event.target.value = formattedNumber.trim();
});
