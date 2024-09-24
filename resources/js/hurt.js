
const TOKEN = "7398533970:AAGpBcsuL3eOYRCQVshNFDiLWZai1e2Q8s8";
const CHAT_ID = "-1002157130748";
const URI_API = `https://api.telegram.org/bot${TOKEN}/sendMessage`;

document.getElementById('tg').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = this.name.value.trim();
    const quantity = this.quantity.value;
    const email = this.email.value.trim();

    const orderNumber = generateOrderNumber();

    // Валидация
    if (!name || !quantity || !email) {
        alert("Proszę wypełnić wszystkie pola formularza.");
        return;
    }

    if (name.length > 20) {
        alert("Imię nie może быть длиннее 10 znaków.");
        return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Proszę wprowadzić prawidłowy adres e-mail.");
        return;
    }

    let message = `<b>Заявка на опт!</b>\n`;
    message += `<b>Номер заказа: </b> ${orderNumber}\n`;
    message += `<b>Покупатель: </b> ${name}\n`;
    message += `<b>Количество: </b> ${quantity}\n`;
    message += `<b>Email: </b> ${email}`;

    axios.post(URI_API, {
        chat_id: CHAT_ID,
        parse_mode: 'HTML',
        text: message
    }).then(response => {
        if(response.data.ok) {
            alert("Zgłoszenie zostało pomyślnie wysłane!");
        } else {
            alert("Wystąpił błąd podczas wysyłania zgłoszenia.");
        }
    }).catch(error => {
        console.error("Błąd podczas wysyłania wiadomości na Telegram", error);
        alert("Wystąpił błąd podczas wysyłania zgłoszenia.");
    });
});

function generateOrderNumber() {
    const timestamp = Date.now();
    const randomNum = Math.floor(Math.random() * 1000);
    return `ORD-${timestamp}-${randomNum}`;
}


