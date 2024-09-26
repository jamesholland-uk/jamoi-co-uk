const pitch = document.getElementById('pitch');
const playersContainer = document.getElementById('players-container');
const playerCountInput = document.getElementById('playerCount');
const playerCountLabel = document.getElementById('playerCountLabel');
const generatePlayersButton = document.getElementById('generatePlayers');
const falconsButton = document.getElementById('falconsButton'); // Reference to the new button

let draggedPlayer = null;

// Update player count label when range slider changes
playerCountInput.addEventListener('input', function() {
  playerCountLabel.textContent = playerCountInput.value;
});

// Draw pitch with markings
function drawPitch() {
  pitch.innerHTML = ''; // Clear previous pitch elements

  // Create the green pitch background
  const pitchDiv = document.createElement('div');
  pitchDiv.style.backgroundColor = 'green';
  pitchDiv.style.width = '100%';
  pitchDiv.style.height = '100%';
  pitch.appendChild(pitchDiv);

  // Draw halfway line
  const halfwayLine = document.createElement('div');
  halfwayLine.classList.add('halfway-line');
  pitchDiv.appendChild(halfwayLine);

  // Draw center circle
  const centerCircle = document.createElement('div');
  centerCircle.classList.add('center-circle');
  pitchDiv.appendChild(centerCircle);

  // Draw penalty areas
  const penaltyAreaTop = document.createElement('div');
  penaltyAreaTop.classList.add('penalty-area', 'top');
  pitchDiv.appendChild(penaltyAreaTop);

  const penaltyAreaBottom = document.createElement('div');
  penaltyAreaBottom.classList.add('penalty-area', 'bottom');
  pitchDiv.appendChild(penaltyAreaBottom);

  // Draw goal areas (6 yard boxes)
  const goalAreaTop = document.createElement('div');
  goalAreaTop.classList.add('goal-area', 'top');
  pitchDiv.appendChild(goalAreaTop);

  const goalAreaBottom = document.createElement('div');
  goalAreaBottom.classList.add('goal-area', 'bottom');
  pitchDiv.appendChild(goalAreaBottom);
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
    player.addEventListener('dragstart', dragStart);
    player.addEventListener('dragend', dragEnd);
  });

  pitch.addEventListener('dragover', dragOver);
  pitch.addEventListener('drop', dropOnPitch);

  playersContainer.addEventListener('dragover', dragOver);
  playersContainer.addEventListener('drop', dropOffPitch);
}

// Drag start
function dragStart(e) {
  draggedPlayer = this;
  setTimeout(() => this.classList.add('hide'), 0);
}

// Drag end
function dragEnd() {
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
    const finalX = Math.max(0, Math.min(x, maxX));
    const finalY = Math.max(0, Math.min(y, maxY));

    draggedPlayer.style.position = 'absolute'; // Fix positioning
    draggedPlayer.style.left = `${finalX}px`;
    draggedPlayer.style.top = `${finalY}px`;

    pitch.appendChild(draggedPlayer);
  }
}

// Drop back to playersContainer
function dropOffPitch(e) {
  e.preventDefault();

  if (draggedPlayer) {
    draggedPlayer.style.position = 'relative'; // Ensure it stays relative
    draggedPlayer.style.left = '0px';
    draggedPlayer.style.top = '0px';
    playersContainer.appendChild(draggedPlayer);
  }
}

// Generate players initially
generatePlayersButton.addEventListener('click', generatePlayers);
generatePlayers();

// Function for "Falcons U11s" button
falconsButton.addEventListener('click', () => {
  playerCountInput.value = 13; // Set the player counter to 13
  playerCountLabel.textContent = playerCountInput.value; // Update label
  playersContainer.innerHTML = ''; // Clear existing players

  // Add goalkeeper with specific name
  const goalkeeper = createPlayer('goalkeeper', 'Jenson');
  playersContainer.appendChild(goalkeeper);

  // Add outfield players with specified names
  const playerNames = ['Abdullah', 'Fred', 'George', 'Gorvind', 'Jack', 'Keenan', 'Kye', 'Mateo', 'Max', 'Nicolas', 'Poppy', 'Riley'];
  playerNames.forEach((name, index) => {
    const player = createPlayer('player', name);
    playersContainer.appendChild(player);
  });

  arrangePlayers();
  addDragListeners();
  drawPitch(); // Ensure the pitch is drawn
});
