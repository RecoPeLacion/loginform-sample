const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const PORT = 3000;

let records = [];

app.use(bodyParser.json());
app.use(express.static('public'));

app.get('/api/records', (req, res) => {
    res.json({ records });
});

app.post('/api/records', (req, res) => {
    const { name, company, position, date } = req.body;
    if (name && company && position && date) {
        records.push({ name, company, position, date });
        res.json({ success: true });
    } else {
        res.json({ success: false });
    }
});

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});