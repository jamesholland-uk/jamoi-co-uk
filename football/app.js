// Global Variables
const playerContainer = document.getElementById('players-container');
const pitch = document.getElementById('pitch');
const playerCountSlider = document.getElementById('player-count');
const createTeamButton = document.getElementById('create-team-button');
const falconsButton = document.getElementById('falcons-button');
let players = [];

// Initial Setup
function setup() {
    createTeamButton.addEventListener('click', () => createPlayers(playerCountSlider.value));
    falconsButton.addEventListener('click', setFalconsU11s);
}

// Create Players based on count
function createPlayers(count) {
    playerContainer.innerHTML = ''; // Clear existing players
    players = [];

    // Create Goalkeeper
    const goalkeeper = createPlayerCircle('Goalkeeper', 'goalkeeper');
    playerContainer.appendChild(goalkeeper);
    players.push(goalkeeper);

    // Create Field Players
    for (let i = 1; i < count; i++) {
        const player = createPlayerCircle(`Player ${i}`);
        playerContainer.appendChild(player);
        players.push(player);
    }
    makePlayersDraggable();
}

// Create a player circle element
function createPlayerCircle(name, type = 'field') {
    const circle = document.createElement('div');
    circle.classList.add('player-circle');
    if (type === 'goalkeeper') {
        circle.classList.add('goalkeeper');
    }

    const input = document.createElement('input');
    input.type = 'text';
    input.value = name;
    circle.appendChild(input);
    return circle;
}

// Set predefined formation for Falcons U11s
function setFalconsU11s() {
    playerCountSlider.value = 13; // Set the slider to 13
    createPlayers(13); // Create 13 players

    const names = [
        'Jenson', 'Abdullah', 'Fred', 'George', 'Gorvind', 'Jack', 'Keenan', 'Kye',
        'Mateo', 'Max', 'Nicolas', 'Poppy', 'Riley'
    ];

    players.forEach((player, i) => {
        player.querySelector('input').value = names[i];
    });

    makePlayersDraggable();
}

// Drag and Drop functionality for both desktop (mouse) and mobile (touch)
function makePlayersDraggable() {
    players.forEach((player) => {
        let startX, startY, offsetX, offsetY;

        // Mouse Events for desktop
        player.addEventListener('mousedown', (event) => {
            event.preventDefault();

            // Capture the initial position of the player and the offset within the circle
            startX = player.offsetLeft;
            startY = player.offsetTop;
            offsetX = event.clientX - startX;
            offsetY = event.clientY - startY;

            document.addEventListener('mousemove', onMouseMove);
            document.addEventListener('mouseup', onMouseUp);
        });

        // Touch Events for mobile
        player.addEventListener('touchstart', (event) => {
            const touch = event.touches[0];

            // Capture the initial position of the player and the offset within the circle
            startX = player.offsetLeft;
            startY = player.offsetTop;
            offsetX = touch.clientX - startX;
            offsetY = touch.clientY - startY;

            document.addEventListener('touchmove', onTouchMove);
            document.addEventListener('touchend', onTouchEnd);
        });

        // Function to handle mouse movement
        function onMouseMove(event) {
            movePlayer(event.clientX, event.clientY);
        }

        // Function to handle touch movement
        function onTouchMove(event) {
            const touch = event.touches[0];
            movePlayer(touch.clientX, touch.clientY);
        }

        // Move the player to new position based on the cursor/touch position and initial offsets
        function movePlayer(clientX, clientY) {
            const newX = clientX - offsetX;
            const newY = clientY - offsetY;

            // Update player position
            player.style.position = 'absolute';
            player.style.left = `${newX}px`;
            player.style.top = `${newY}px`;
        }

        // Handle when the mouse is released
        function onMouseUp() {
            document.removeEventListener('mousemove', onMouseMove);
            document.removeEventListener('mouseup', onMouseUp);
        }

        // Handle when the touch is released
        function onTouchEnd() {
            document.removeEventListener('touchmove', onTouchMove);
            document.removeEventListener('touchend', onTouchEnd);
        }
    });
}

// Initialize the app
window.onload = setup;
