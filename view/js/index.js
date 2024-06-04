




$(document).ready(function() {
    // Load initial chat messages
    loadChat();

    // Submit message form on enter key press
    $('#messageInput').keypress(function(event) {
        if (event.which === 13) {
            event.preventDefault();
            sendMessage();
        }
    });

    $('#username').keypress(function(event) {
        if (event.which === 13) {
            event.preventDefault();
            sendMessage();
        }
    });

    // Submit message form on button click
    $('#messageForm').submit(function(event) {
        event.preventDefault();
        sendMessage();
    });

    // Function to load chat messages
    function loadChat() {
        $.ajax({
            url: 'http://localhost/chat2/case-2-javascript-ajax/index.php/controller/read',
            type: 'GET',
            success: function(response) {
                $('#chatBox').html(response);
            }
        });
    }

    
    // Function to send message
    function sendMessage() {
        var message = $('#messageInput').val().trim();
        var username = $('#username').text().trim();
        var email = $('#email').text().trim();

        if (message !== '' && username !== '') {
            $.ajax({
                url: 'http://localhost/chat2/case-2-javascript-ajax/index.php/controller/write',
                type: 'POST',
                data: { message: message, username: username,email:email },
                success: function(response) {
                    $('#messageInput').val('');
                    loadChat();

                    
                }
            });

        }
    }

    // Function to refresh chat messages periodically
    setInterval(function() {
        loadChat();
    }, 3000); // Refresh every 3 seconds
});
