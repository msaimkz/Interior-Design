function Tab() {
    const buttons = document.querySelectorAll('.support-left-head-child');
    const tabs = document.querySelectorAll('.support-left-content-tab');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.toggle;

            buttons.forEach(btn => btn.classList.remove('active'));
            tabs.forEach(tab => tab.classList.remove('active'));

            this.classList.add('active');
            document.getElementById(id).classList.add('active');
        });
    });
}

Tab();

function ChatTab() {
    const buttons = document.querySelectorAll('.support-left-body-chart-item');
    const ChatTab = document.querySelector('#ChatTab');
    const StartChatTab = document.querySelector('#StartChatTab');
    const MainRightContainer = document.querySelector('.res-support-right-container');
    const ChatCloseBtn = document.querySelector('#ChatCloseBtn');

    buttons.forEach(button => {
        button.addEventListener('click', function () {


            MainRightContainer.classList.add('active');
            StartChatTab.classList.remove('active');
            ChatTab.classList.add('active');
        });
    });

    ChatCloseBtn.addEventListener('click', function () {
        MainRightContainer.classList.remove('active');

    })
}

ChatTab();

function EmojiPicker() {
    const emojiBtn = document.getElementById("emojiButton");
    const GetemojiBtn = document.getElementById("GetInputValue");
    const emojiPickerDiv  = document.getElementById("emojiPicker");
    const emojiInput = document.getElementById("msg");

   
    emojiBtn.addEventListener("click", () => {
        emojiPickerDiv .style.display = emojiPickerDiv .style.display === "none" ? "block" : "none";
    });

    
    emojiPickerDiv .addEventListener("emoji-click", (event) => {
        emojiInput.value += event.detail.unicode; 
        emojiPickerDiv .style.display = "none"; 
    });

   
    document.addEventListener("click", (e) => {
        if (!emojiPickerDiv .contains(e.target) && e.target !== emojiBtn) {
            emojiPickerDiv .style.display = "none";
        }
    });

    new EmojiMart.Picker({
        parent: emojiPickerDiv,
        onEmojiSelect: (emoji) => {
            emojiInput.value += emoji.native; 
        },
    });

   
}

EmojiPicker();