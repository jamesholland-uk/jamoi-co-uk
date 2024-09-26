const pitch = document.getElementById('pitch');
const playersContainer = document.getElementById('players-container');
const playerCountInput = document.getElementById('playerCount');
const generatePlayersButton = document.getElementById('generatePlayers');

let draggedPlayer = null;

// Function to generate players based on input
function generatePlayers() {
  playersContainer.innerHTML = ''; // Clear current players
  const playerCount = playerCountInput.value;
  
  // Add the goalkeeper first
  const goalkeeper = createPlayer('goalkeeper', 'GK');
  playersContainer.appendChild(goalkeeper);

  // Add outfield players
  for (let i = 1; i < playerCount; i++) {
    const player = createPlayer('player', `Player ${i}`);
    playersContainer.appendChild(player);
  }

  addDragListeners();
}

// Function to create a player element
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

// Function to add drag event listeners
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

// Drag and drop functionality
function dragStart(e) {
  draggedPlayer = this;
  setTimeout(() => this.classList.add('hide'), 0);
}

function dragEnd() {
  setTimeout(() => this.classList.remove('hide'), 0);
  draggedPlayer = null;
}

function dragOver(e) {
  e.preventDefault(); // Prevent default to allow drop
}

// Function to drop players onto the pitch
function dropOnPitch(e) {
  e.preventDefault();
  
  if (draggedPlayer) {
    const pitchRect = pitch.getBoundingClientRect(); // Get pitch boundaries
    
    // Calculate the position relative to the pitch
    const x = e.clientX - pitchRect.left - draggedPlayer.offsetWidth / 2;
    const y = e.clientY - pitchRect.top - draggedPlayer.offsetHeight / 2;

    // Make sure the player stays within pitch bounds
    const maxX = pitchRect.width - draggedPlayer.offsetWidth;
    const maxY = pitchRect.height - draggedPlayer.offsetHeight;

    const finalX = Math.max(0, Math.min(x, maxX));
    const finalY = Math.max(0, Math.min(y, maxY));

    // Set the position of the dragged player
    draggedPlayer.style.position = 'absolute';
    draggedPlayer.style.left = `${finalX}px`;
    draggedPlayer.style.top = `${finalY}px`;

    // Append the player to the pitch
    pitch.appendChild(draggedPlayer);
  }
}

// Function to drop players back to the substitutes area
function dropOffPitch(e) {
  e.preventDefault();
  
  if (draggedPlayer) {
    // Remove absolute positioning, so the player goes back to its original container
    draggedPlayer.style.position = 'relative';
    draggedPlayer.style.left = '0px';
    draggedPlayer.style.top = '0px';

    // Append the player back to the playersContainer (substitutes area)
    playersContainer.appendChild(draggedPlayer);
  }
}

// Event listener to generate players
generatePlayersButton.addEventListener('click', generatePlayers);

// Initial call to generate players with the default value
generatePlayers();
