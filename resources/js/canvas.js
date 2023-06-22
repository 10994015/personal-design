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
        this.currentCropWidth = 1500
    }
    draw(){
        c.drawImage(this.image,this.currentCropWidth*this.frames,0,this.currentCropWidth,1500, this.position.x, this.position.y, this.width, this.height)
    }
    update(){
        this.draw();
        this.idx ++ 
        if(this.idx%12 === 0){
            this.frames++;
        }
        if(this.frames >=9){
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


const worktext = document.getElementsByClassName('worktext');
window.addEventListener('scroll', (e)=>{
    let value = window.scrollY;
    console.log(value);
    for(let i=0;i<worktext.length;i++){
        worktext[i].style.transform = `translateX(-${value*0.1}px)`
    }
})
