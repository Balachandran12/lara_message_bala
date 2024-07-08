<!DOCTYPE html>
<html>

<head>
    <title>Chat Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="" x-data="{
    open: false
}">
    <div class="flex m-10 justify-between items-center bg-gray-300 rounded-lg">
        <div class="container">
            <img src="{{ asset('balachandran_lara_message/message/images/new.png') }}" alt=""
                class="w-20 rounded-full">
        </div>
        <div class="container ">
            <h1 class="text-bold">Chating App</h1>
        </div>
        <div class="ml-10 mr-10">
            <h1>Log</h1>
        </div>
    </div>
    <div class="relative bg-gray-200 w-[50%]  fixed top-[100px] left-[350px] right-0" x-show="open">
        <div class="h-[200px] overflow-y-auto " id="messages">
            <?php
            $var = ['hai', 'gay'];
            ?>

            @foreach ($var as $v)
                <p class="bg-blue-300 p-1 w-10 mt-2 ml-2 rounded-e-full">sd</p>
            @endforeach
        </div>
        <div class="flex justify-center items-end h-full">
            <div class="w-full">
                <input type="text" id="input" class="border-2 w-[80%]">
                <button class="bg-green-500 w-[19%]" id="submit">Submit</button>
            </div>
        </div>
    </div>
    <script>
        // JavaScript to handle chat input and display
        document.getElementById('submit').addEventListener('click', function() {
            var input = document.getElementById('input');
            var message = input.value.trim();

            if (message !== "") {
                var messagesDiv = document.getElementById('messages');
                var newMessageDiv = document.createElement('div');
                var newMessage = document.createElement('p');
                newMessage.style.backgroundColor = '#3182ce'; // Example background color (bg-blue-300)
                newMessage.style.padding = '10px'; // Example padding (p-1)
                newMessage.style.width = '50px'; // Example width (w-10)
                newMessage.style.marginTop = '20px'; // Example margin top (mt-2)
                newMessage.style.marginLeft = '20px'; // Example margin left (ml-2)
                newMessage.style.borderRadius = '20%'; // Example rounded corners (rounded-e-full)
                newMessage.style.color = 'white';
                newMessage.textContent = message;
                var one = newMessageDiv.appendChild(newMessage);
                messagesDiv.appendChild(one);

                input.value = '';

                messagesDiv.scrollTop = messagesDiv.scrollHeight;
            }
        });

        // Optionally, handle the Enter key for submission
        document.getElementById('input').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                document.getElementById('submit').click();
            }
        });
    </script>

    <div class="relative">
        <div @click="open=!open" class="fixed top-[580px] left-[1340px] right-0">
            <img src="{{ asset('balachandran_lara_message/message/images/now-open.png') }}" alt=""
                class="w-20 rounded-s-full">
            <H1>Click To Chat</H1>
        </div>
    </div>
</body>

</html>
