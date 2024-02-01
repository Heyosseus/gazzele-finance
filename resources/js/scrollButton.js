function toggleScrollButtons() {
    const upButton = document.getElementById('upButton');
    const downButton = document.getElementById('downButton');

    const distanceFromBottom = 1000;
    const isAtTop = window.scrollY === 0;
    const isAtBottom = window.innerHeight + window.scrollY >= document.body.scrollHeight - distanceFromBottom;

    upButton.style.display = isAtTop ? 'none' : 'flex';
    downButton.style.display = isAtBottom ? 'none' : 'flex';
}

window.addEventListener('scroll', toggleScrollButtons);

toggleScrollButtons();
