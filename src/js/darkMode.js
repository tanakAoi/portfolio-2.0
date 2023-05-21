// const darkModeToggle = () => {

//     // Get elements from DOM
//     const body = document.querySelector('body')
//     const themeToggleButton = document.querySelector('#theme-toggle-button')
//     const themeToggleList = document.querySelector('.theme-toggle__list')
//     const themeModeButtons = document.querySelectorAll('.theme-toggle__item .theme-toggle__button')

//     // Function to toggle list visibility
//     const toggleListVisibility = () => {
//         themeToggleButton.classList.toggle('theme-toggle__button--active')
//         themeToggleList.classList.toggle('theme-toggle__list--visible')
//     }

//     // Function to toggle theme mode
//     const toggleThemeMode = (event) => {

//         // Get parent of clicked button
//         const buttonParent = event.currentTarget.parentNode

//         // Get value from clicked button data-attribute (data-theme="")
//         const theme = event.currentTarget.dataset.theme

//         // Get icon element from ThemeToggleButton (top button)
//         const themeToggleButtonIcon = themeToggleButton.querySelector('.material-symbols-outlined')

//         // Get icon element from clicked button
//         const icon = event.currentTarget.querySelector('.material-symbols-outlined')

//         // Get text of icon from clicked button
//         const iconText = icon.innerText


//         // Change text in top button's icon element to current button's icon text
//         themeToggleButtonIcon.innerText = iconText

//         // Remove all classes from body
//         body.classList = ''

//         // Add light class to body if data-attribute value was light
//         if ( theme === 'light' ) {
//             body.classList.add('light')
//         }

//         // Add dark class to body if data-attribute value was dark
//         if ( theme === 'dark' ) {
//             body.classList.add('dark')
//         }

//         // If data-attribute was default, remove all classes from body
//         if ( theme === 'default' ) {
//             body.classList = ''
//         }

//         // For each parent of all buttons, remove current class
//         themeModeButtons.forEach(button => {
//             button.parentNode.classList.remove('theme-toggle__item--current')
//         }) 

//         // Add current class on clicked button's parent
//         buttonParent.classList.add('theme-toggle__item--current')

//         // Run function to hide list
//         toggleListVisibility()
//     } 

//     // Events
//     themeToggleButton.addEventListener('click', toggleListVisibility)
//     themeModeButtons.forEach( button => button.addEventListener('click', toggleThemeMode) )
// }

// darkModeToggle()

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