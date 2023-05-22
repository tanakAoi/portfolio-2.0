const headerScroll = () => {

    const header = document.querySelector('.header')
    let lastScroll = 0
    let currentScroll = 0

    const toggleHeaderClass = () => {

        if ( window.scrollY > 700 ) {

            header.classList.add('header--scroll')

        } else {

            header.classList.remove('header--scroll')
        }
        
    }

    window.addEventListener('scroll', toggleHeaderClass)
    

    const showHeader = () => {
        
        let currentScroll = window.scrollY
        
        if ( currentScroll > 700 && currentScroll > lastScroll ) {
            
            header.classList.add('header--show')
            
        } else {
            
            header.classList.remove('header--show')
        }
        
        lastScroll = currentScroll

    }
    
    window.addEventListener('scroll', showHeader)
    
}

headerScroll()