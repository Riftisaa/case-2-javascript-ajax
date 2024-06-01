const chatButton = document.querySelector('.chatbox__button');
const chatContent = document.querySelector('.chatbox__support');
const icons = {
    isClicked: '<img src="./images/user.png" />',
    isNotClicked: '<img src="./images/user.png" />'
}
const chatbox = new InteractiveChatbox(chatButton, chatContent);
chatbox.display();
