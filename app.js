let list_icon = document.querySelector( '.list-icon' )
let sidebar = document.querySelector( '.sidebar' )
let underlay = document.querySelector( '.underlay' )
let desc = document.querySelectorAll( '.prod-desc' )
let left = document.querySelector( '.left' )
let right = document.querySelector( '.right' )
let product_container = document.querySelector( '.products' )


right.addEventListener( 'click', () => {
    product_container.scrollBy( 200, 0 )
} )

left.addEventListener( 'click', () => {
    product_container.scrollBy( -200, 0 )
} )


desc.forEach( ( item, index ) => {
    item.innerHTML = item.innerHTML.slice( 0, 100 ) + '...'
} )



list_icon.addEventListener( 'click', () => {
    underlay.style.visibility = 'visible'
    sidebar.style.transform = 'translateX(0)'
} )

underlay.addEventListener( 'click', () => {
    sidebar.style.transform = 'translateX(-100%)'
    underlay.style.visibility = 'hidden'
} )
document.querySelector( '.close-sidebar' ).addEventListener( 'click', () => {
    sidebar.style.transform = 'translateX(-100%)'
    underlay.style.visibility = 'hidden'
} )

sidebar.addEventListener( 'click', ( e ) => {
    e.stopPropagation()
} )