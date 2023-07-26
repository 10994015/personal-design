const cursorRounded = document.querySelector('#custom-cursor-rounded');
const cursorPointed = document.querySelector('#custom-cursor-pointed');
const cursorNoted = document.querySelector('#custom-cursor-noted');

function isMobileDevice() {
    const mobileDevice = ['Android', 'webOS', 'iPhone', 'iPad', 'iPod', 'BlackBerry', 'Windows Phone']
    let isMobileDevice = mobileDevice.some(e => navigator.userAgent.match(e))
    return isMobileDevice
}

if(isMobileDevice()){
    cursorRounded.style.display = "none"
}

const moveCursor = (e)=> {
    const mouseY = e.clientY;
    const mouseX = e.clientX;
     
    cursorRounded.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
    cursorPointed.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
    cursorNoted.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
   
  }
  
  const moveNot = ()=>{
    cursorRounded.style.display = "none"
    cursorPointed.style.display = "none"
    cursorNoted.style.display = "block"
}
const movePoint = ()=>{
    cursorNoted.style.display = "none"
    cursorRounded.style.display = "none"
    cursorPointed.style.display = "block"
}
const moveDefault = ()=>{
    cursorNoted.style.display = "none"
    cursorRounded.style.display = "block"
    cursorPointed.style.display = "none"
}
const alink = document.querySelectorAll('a')
const btn = document.querySelectorAll('button')
const cursorDefault = document.querySelectorAll('.cursor-pointed')
const input = document.querySelectorAll('input')
const textarea = document.querySelectorAll('textarea')
const cursorNot = document.querySelectorAll('.cursor-not')


if(!isMobileDevice()){
    for(let i=0;i<alink.length;i++){
        alink[i].addEventListener('mouseover', movePoint)
        alink[i].addEventListener('mouseout', moveDefault)
    }
    for(let i=0;i<cursorDefault.length;i++){
        cursorDefault[i].addEventListener('mouseover', movePoint)
        cursorDefault[i].addEventListener('mouseout', moveDefault)
    }
    for(let i=0;i<input.length;i++){
        input[i].addEventListener('mouseover', movePoint)
        input[i].addEventListener('mouseout', moveDefault)
    }
    for(let i=0;i<textarea.length;i++){
        textarea[i].addEventListener('mouseover', movePoint)
        textarea[i].addEventListener('mouseout', moveDefault)
    }
    for(let i=0;i<btn.length;i++){
        btn[i].addEventListener('mouseover', movePoint)
        btn[i].addEventListener('mouseout', moveDefault)
    }
    for(let i=0;i<cursorNot.length;i++){
        cursorNot[i].addEventListener('mouseover', moveNot)
        cursorNot[i].addEventListener('mouseout', moveDefault)
    }
    window.addEventListener('mousemove', moveCursor)
    
}