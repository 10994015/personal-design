const canvas = document.querySelector('#me')
const c = canvas.getContext('2d')

canvas.width = 340
canvas.height = 340

const createPlayer = (imgSrc)=>{
    const image = new Image();
    image.src = imgSrc
    return image
}
class Me{
    constructor(){
        this.width = 340
        this.height = 340
        this.position = {
            x:0,
            y:0,
        }
        this.image = createPlayer('/images/me.png')
        this.frames = 0;
        this.idx = 0
        this.currentCropWidth = 7076/17
    }
    draw(){
        c.drawImage(this.image,this.currentCropWidth*this.frames,0,this.currentCropWidth,417, this.position.x, this.position.y, this.width, this.height)
    }
    update(){
        this.draw();
        this.idx ++ 
        if(this.idx%18 === 0){
            this.frames++;
        }
        if(this.frames >17){
            this.frames = 0
        }
    }
}
const me = new Me()

function animate(){
    window.requestAnimationFrame(animate)
    me.update()
}
animate()
const water = document.getElementById('waters').querySelector('.water')

const skilltext = document.getElementsByClassName('skilltext');
const worktext = document.getElementsByClassName('worktext');
const basic = 90
window.addEventListener('scroll', (e)=>{
    console.log(water.style.transform);
    let value = (window.scrollY/4) * 0.8;
    let value2 = (window.scrollY/4) * 0.8;
    for(let i=0;i<worktext.length;i++){
        worktext[i].style.transform = `translateX(-${value}px)`
    }
    for(let i=0;i<skilltext.length;i++){
        skilltext[i].style.transform = `translateX(-${value2}px)`
    }
})
const send  =document.getElementById('send');
const form = document.getElementById('form')
const letter = document.getElementById('letter')
const contentTop = document.getElementById('contentTop')
const letterBottom = document.getElementById('letterBottom')
const letterTop = document.getElementById('letterTop')
const formContainer = document.getElementById('formContainer')
const thenk = document.getElementById('thenk')
const speed1 = document.getElementById('speed1')
const speed2 = document.getElementById('speed2')
const speed3 = document.getElementById('speed3')
const speed4 = document.getElementById('speed4')
const speed5 = document.getElementById('speed5')

send.addEventListener('click', ()=>{
    form.style.transform = 'translateY(950px)'
    letter.style.paddingTop = '150px'
    form.style.transition = '2s'
    letter.style.transition = '2s'
    setTimeout(()=>{
        contentTop.style.display = "flex"
        letterBottom.style.opacity = 0
        letterBottom.style.transition = '1s'
        letterTop.style.opacity = 0
        letterTop.style.transition = '1s'
    }, 2000)
    setTimeout(()=>{
        formContainer.classList.add('send');
        
    }, 3000)
    setTimeout(()=>{
        speed1.style.display = 'block'
        speed2.style.display = 'block'
        speed3.style.display = 'block'
    }, 3700)
    setTimeout(()=>{
        speed4.style.display = 'block'
    }, 3800)
    setTimeout(()=>{
        speed5.style.display = 'block'
        thenk.style.top = '50%'
        thenk.style.opacity =1
    }, 3900)
})
const header = document.querySelector('header')

window.addEventListener("wheel", handleWheelEvent);
// window.addEventListener('scroll', handleScrollEvent)

function handleWheelEvent(event) {
    if (event.deltaY > 0) {
      if(this.scrollY > 100){
          header.style.top = "-78px"
      }
    } else if (event.deltaY < 0) {
      header.style.top = "0"
    }
  }


