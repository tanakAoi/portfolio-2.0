const scrollToTop = () => {

    const button = document.querySelector('.scroll-to-top')

    const showButton = () => {

        if ( window.scrollY > 700 ) {

            button.classList.add('scroll-to-top--show')

        } else {

            button.classList.remove('scroll-to-top--show')
        }
    }

    window.addEventListener('scroll',showButton)
}

scrollToTop()