const pitch = document.getElementById('pitch');
const playersContainer = document.getElementById('players-container');
const playerCountInput = document.getElementById('playerCount');
const playerCountLabel = document.getElementById('playerCountLabel');
const generatePlayersButton = document.getElementById('generatePlayers');
const falconsButton = document.getElementById('falconsButton');

let draggedPlayer = null;

// Update player count label when range slider changes
playerCountInput.addEventListener('input', function() {
    playerCountLabel.textContent = playerCountInput.value;
});

// Draw pitch with markings
function drawPitch() {
    // Clear previous pitch elements
    pitch.innerHTML = ''; 

    // Create the halfway line
    const halfwayLine = document.createElement('div');
    halfwayLine.classList.add('halfway-line');
    pitch.appendChild(halfwayLine);

    // Create center circle
    const centerCircle = document.createElement('div');
    centerCircle.classList.add('center-circle');
    pitch.appendChild(centerCircle);

    // Create penalty areas
    const penaltyAreaTop = document.createElement('div');
    penaltyAreaTop.classList.add('penalty-area', 'top');
    pitch.appendChild(penaltyAreaTop);

    const penaltyAreaBottom = document.createElement('div');
    penaltyAreaBottom.classList.add('penalty-area', 'bottom');
    pitch.appendChild(penaltyAreaBottom);

    // Create goal areas (6 yard boxes)
    const goalAreaTop = document.createElement('div');
    goalAreaTop.classList.add('goal-area', 'top');
    pitch.appendChild(goalAreaTop);

    const goalAreaBottom = document.createElement('div');
    goalAreaBottom.classList.add('goal-area', 'bottom');
    pitch.appendChild(goalAreaBottom);
}

// Generate players based on input
function generatePlayers() {
    playersContainer.innerHTML = ''; // Clear existing players
    const playerCount = playerCountInput.value;

    // Add goalkeeper
    const goalkeeper = createPlayer('goalkeeper', 'GK');
    playersContainer.appendChild(goalkeeper);

    // Add outfield players
    for (let i = 1; i < playerCount; i++) {
        const player = createPlayer('player', `Player ${i}`);
        playersContainer.appendChild(player);
    }

    arrangePlayers();
    addDragListeners();
    drawPitch(); // Ensure the pitch is drawn each time players are generated
}

// Create a player circle
function createPlayer(type, placeholderText) {
    const playerDiv = document.createElement('div');
    playerDiv.classList.add('player');
    if (type === 'goalkeeper') {
        playerDiv.classList.add('goalkeeper');
    }
    playerDiv.setAttribute('draggable', 'true');

    const input = document.createElement('input');
    input.type = 'text';
    input.placeholder = placeholderText;
    playerDiv.appendChild(input);

    return playerDiv;
}

// Arrange players in rows of no more than 6
function arrangePlayers() {
    playersContainer.style.display = 'flex';
    playersContainer.style.flexWrap = 'wrap';
    playersContainer.style.justifyContent = 'center';
}

// Add drag event listeners to players
function addDragListeners() {
    const players = document.querySelectorAll('.player');
    players.forEach(player => {
        // Mouse events
        player.addEventListener('dragstart', dragStart);
        player.addEventListener('dragend', dragEnd);
        
        // Touch events
        player.addEventListener('touchstart', touchStart);
        player.addEventListener('touchend', touchEnd);
        player.addEventListener('touchmove', touchMove);
    });

    pitch.addEventListener('dragover', dragOver);
    pitch.addEventListener('drop', dropOnPitch);
    
    pitch.addEventListener('touchmove', touchMoveOnPitch);
    pitch.addEventListener('touchend', dropOnPitch);

    playersContainer.addEventListener('dragover', dragOver);
    playersContainer.addEventListener('drop', dropOffPitch);

    playersContainer.addEventListener('touchmove', touchMoveOffPitch);
    playersContainer.addEventListener('touchend', dropOffPitch);
}

// Drag start
function dragStart(e) {
    draggedPlayer = this;
    setTimeout(() => this.classList.add('hide'), 0);
}

// Touch start
function touchStart(e) {
    e.preventDefault(); // Prevent default to avoid scrolling
    draggedPlayer = this;
    setTimeout(() => this.classList.add('hide'), 0);
}

// Drag end
function dragEnd() {
    setTimeout(() => this.classList.remove('hide'), 0);
    draggedPlayer = null;
}

// Touch end
function touchEnd() {
    setTimeout(() => this.classList.remove('hide'), 0);
    draggedPlayer = null;
}

// Allow drop
function dragOver(e) {
    e.preventDefault();
}

// Drop on pitch
function dropOnPitch(e) {
    e.preventDefault();
    
    if (draggedPlayer) {
        const pitchRect = pitch.getBoundingClientRect(); // Pitch boundaries
        const x = e.clientX - pitchRect.left - draggedPlayer.offsetWidth / 2;
        const y = e.clientY - pitchRect.top - draggedPlayer.offsetHeight / 2;

        // Constrain player within pitch bounds
        const maxX = pitchRect.width - draggedPlayer.offsetWidth;
        const maxY = pitchRect.height - draggedPlayer.offsetHeight;
        
        draggedPlayer.style.left = Math.max(0, Math.min(x, maxX)) + 'px';
        draggedPlayer.style.top = Math.max(0, Math.min(y, maxY)) + 'px';

        pitch.appendChild(draggedPlayer); // Move player to pitch
    }
}

// Drop off pitch
function dropOffPitch(e) {
    e.preventDefault();
    if (draggedPlayer) {
        playersContainer.appendChild(draggedPlayer); // Move player back to container
        draggedPlayer.style.left = ''; // Reset positioning
        draggedPlayer.style.top = ''; // Reset positioning
    }
}

// Set Falcons U11s players
falconsButton.addEventListener('click', function() {
    playerCountInput.value = 13;
    playerCountLabel.textContent = 13;
    generatePlayers();
});

// Initial setup
drawPitch();
generatePlayersButton.addEventListener('click', generatePlayers);
