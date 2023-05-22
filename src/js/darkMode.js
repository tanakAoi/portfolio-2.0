const darkModeToggle = () => {

    const toggleButton = document.querySelector('.mode-toggle')

    const toggleClass = (event) => {

        document.body.classList.toggle('dark')

    }

    const toggleIcon = (event) => {

        if ( toggleButton.innerText === 'dark_mode') {

            toggleButton.innerText = 'light_mode'

        } else {

            toggleButton.innerText = 'dark_mode'

        }
        
    }

    toggleButton.addEventListener('click', toggleClass)
    toggleButton.addEventListener('click', toggleIcon)

}

darkModeToggle()