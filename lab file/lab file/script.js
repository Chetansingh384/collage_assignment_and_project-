document.addEventListener('DOMContentLoaded', () => {
    const addTaskBtn = document.getElementById('addTaskBtn');
    const viewByDateBtn = document.getElementById('viewByDateBtn');
    const addNoteBtn = document.getElementById('addNoteBtn');
    const taskList = document.getElementById('taskList');
    const notesContainer = document.getElementById('notesContainer');
    const taskModal = document.getElementById('taskModal');
    const taskForm = document.getElementById('taskForm');
    const taskNameInput = document.getElementById('taskName');
    const taskDateInput = document.getElementById('taskDate');
    const dropdownBtn = document.querySelector('.dropdown-btn');
    const dropdownContent = document.querySelector('.dropdown-content');

    // Show/hide dropdown menu
    dropdownBtn.addEventListener('click', () => {
        dropdownContent.classList.toggle('show');
    });

    // Show task modal
    addTaskBtn.addEventListener('click', () => {
        taskModal.style.display = 'block';
    });

    // Close task modal
    document.querySelector('.close').addEventListener('click', () => {
        taskModal.style.display = 'none';
    });

    // Add task
    taskForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const taskName = taskNameInput.value.trim();
        const taskDate = taskDateInput.value;
        if (taskName && taskDate) {
            const taskItem = document.createElement('div');
            taskItem.textContent = `${taskName} - ${taskDate}`;
            taskList.appendChild(taskItem);
            taskModal.style.display = 'none';
            taskNameInput.value = '';
            taskDateInput.value = '';
        }
    });

    // Add note
    addNoteBtn.addEventListener('click', () => {
        const noteContent = prompt('Enter your note:');
        if (noteContent) {
            const noteCard = document.createElement('div');
            noteCard.classList.add('card');
            noteCard.textContent = noteContent;
            notesContainer.appendChild(noteCard);
        }
    });
});
