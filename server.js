const express = require('express')
const app = express()
var port = 8080;


app.get('/', (req, res) => res.send('Hello World!'))


app.listen(process.env.PORT || port, () => console.log('Example app listening on port 3000!'))