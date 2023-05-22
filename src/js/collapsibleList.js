const collapsibleList = () => {

    const listTitle = document.querySelector('.intro__text')
    const aboutList = document.querySelector('intro__list')

    const addIconToList = () => {

        const buttonEl = document.createElement('span')
        buttonEl.classList.add('material-symbols-outlined', 'intro__button')
        buttonEl.innerText = 'expand_more'

        listTitle.append(buttonEl)

    }

    addIconToList()

    const toggleList = (event) => {

        const sibling = event.target.parentElement.nextElementSibling

        sibling.classList.toggle('intro__list--open')

        const expandIcon = event.target

        if ( expandIcon.innerText === 'expand_more' ) {

            expandIcon.innerText = 'expand_less'

        } else {

            expandIcon.innerText = 'expand_more'
        }
    }
    
    const listButton = listTitle.firstElementChild

    listButton.addEventListener('click', toggleList)

}

collapsibleList()