const app = document.getElementById('root')


const container = document.createElement('div')
container.setAttribute('class', 'container')


app.appendChild(container)

var request = new XMLHttpRequest()
request.open('GET', 'https://ghibliapi.herokuapp.com/films', true)
request.onload = function () {
    // Begin accessing JSON data here
    var data = JSON.parse(this.response)
    if (request.status >= 200 && request.status < 400) {
        data.forEach((movie) => {
            const card = document.createElement('div')
            card.setAttribute('class', 'card')
            if (movie.title == "Spirited Away") {
                const h1 = document.createElement('h1')
                h1.textContent = movie.title

                movie.original_title = movie.original_title
                movie.description = movie.description
                movie.director = movie.director
                movie.producer = movie.producer
                movie.release_date=movie.release_date

                const p = document.createElement('p')
                
                p.textContent = `Konusu: ${movie.description} \n Orijinal İsmi: ${movie.original_title}   Yönetmeni: ${movie.director}  Yapımcısı: ${movie.producer} \n   Yayınlanma tarihi: ${movie.release_date}  `

               
                container.appendChild(card)
                card.appendChild(h1)
                card.appendChild(p)
                
            }
        })
    } else {
        const errorMessage = document.createElement('marquee')
        errorMessage.textContent = `error!`
        app.appendChild(errorMessage)
    }
}

request.send()