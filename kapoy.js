document.getElementById('immersionForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const company = document.getElementById('company').value;
    const position = document.getElementById('position').value;
    const date = document.getElementById('date').value;

    fetch('/api/records', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ name, company, position, date })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            addRecordToList(name, company, position, date);
            document.getElementById('immersionForm').reset();
        } else {
            alert('Error adding record');
        }
    });
});

function addRecordToList(name, company, position, date) {
    const li = document.createElement('li');
    li.textContent = `${name} - ${company} - ${position} - ${date}`;
    document.getElementById('recordsList').appendChild(li);
}

function loadRecords() {
    fetch('/api/records')
        .then(response => response.json())
        .then(data => {
            data.records.forEach(record => {
                addRecordToList(record.name, record.company, record.position, record.date);
            });
        });
}

document.addEventListener('DOMContentLoaded', loadRecords);