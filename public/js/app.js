const apiKey = "46a26f448513f0db1bfd12235988dc59"
const cityInput = document.querySelector('#city-input')
const searchBtn = document.querySelector('#search')

const cityElement = document.querySelector('#city')
const tempElement = document.querySelector('#temperature span')
const descElement = document.querySelector('#description')
const weatherIconElement = document.querySelector('#weather-icon')
const humidityElement = document.querySelector('#humidity span')
const windElement = document.querySelector('#wind span')

const weatherContainer = document.getElementById('weather-data')

const getWeatherData = async(city)=> {
    const apiWeatherUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}&lang=pt_br`
    const res = await fetch(apiWeatherUrl)
    const data = await res.json()
    return data
}
const showWeatherData = async(city) => {
    const data = await getWeatherData(city)

    cityElement.innerText = data.name
    tempElement.innerText = parseInt(data.main.temp)
    descElement.innerText = data.weather[0].description
    weatherIconElement.setAttribute("src", `http://openweathermap.org/img/wn/${data.weather[0].icon}.png`)
    humidityElement.innerText = `${data.main.humidity}%`
    windElement.innerText = `${data.wind.speed}Km/h`

    weatherContainer.classList.remove("hide")
}
searchBtn.addEventListener('click', (event)=> {
    event.preventDefault()
    const city = cityInput.value
    showWeatherData(city)
})

cityInput.addEventListener('keyup', (event)=> {
     if(event.code === "Enter") {
        const city = event.target.value
        showWeatherData(city)
     }
})