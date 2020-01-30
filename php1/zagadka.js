let tab = []
let tab2 = []
let cellCount=10
let counter = 1
let mouseFlag = false
let spaceFlag = false
let xflag = false
let focused = {x:0,y:0}
let currentColor='blue'
let currentColor2='grey'
let config = {
    rows:[
        [2,1,3],[1,1,2],[1,1,2],[1,2],[2,3],[3,4],[4,3,1],[1,5,1],[1,2,2,1],[1,2,1,3]
    ],
    columns:[
        [8,1],[1,3,1],[3,1],[4],[1,2],[2,1],[2,4],[1,3,2],[6,1,1],[7,2]
    ]
}



window.addEventListener('keydown',(e)=>{
    switch(e.keyCode){
        case 32:
            if(!spaceFlag && tab2[focused.x][focused.y].style.backgroundColor == 'blue'){
            currentColor='white'
            }
            else{
                currentColor='blue' 
            }
            spaceFlag=true
            break;
        case 39:
            tab2[focused.x][focused.y].style.borderColor='black'
            if(focused.y==cellCount-1){
                focused.y=0
            }
            else{ 
                focused.y++
            }
            break;
        case 37:
            tab2[focused.x][focused.y].style.borderColor='black'
            if(focused.y==0){
                focused.y=cellCount-1
            }
            else{
                focused.y--
            }
            break;
        case 38:
            tab2[focused.x][focused.y].style.borderColor='black'
            if(focused.x==0){
                focused.x=cellCount-1
            }
            else{
                focused.x--
            }
            break;
        case 40:
            tab2[focused.x][focused.y].style.borderColor='black'
            if(focused.x==cellCount-1){
                focused.x=0
            }
            else{
                focused.x++
            }
            break;
        case 88:
            if(!xflag && tab2[focused.x][focused.y].style.backgroundColor != 'grey'){
                currentColor2='grey'
            }
            else{
                currentColor2='white' 
            }
            xflag=true
            break;
            
    }
    tab2[focused.x][focused.y].style.borderColor='red'
    if(spaceFlag){
        tab2[focused.x][focused.y].style.backgroundColor=currentColor
    }
    else if(xflag){
        tab2[focused.x][focused.y].style.backgroundColor=currentColor2
    }
})
document.addEventListener('keyup',(e)=>{
    spaceFlag = e.keyCode==32?false:spaceFlag
    xflag = e.keyCode==88?false:xflag
})
document.addEventListener('mousedown',()=>{
    mouseFlag=true

})
document.addEventListener('mouseup',()=>{
    mouseFlag=false
})
const makeButton=()=>{
    let button = document.createElement('button')
    button.setAttribute("class", 'button')
    button.addEventListener('click',()=>{
        for(let i=0;i< cellCount;i++){
            for(let j=0; j < cellCount;j++){
                tab2[i][j].style.backgroundColor='white'
            }
        }
    })
    button.innerHTML='Wyczyść'
    let button2 = document.createElement('button')
    button2.addEventListener('click',()=>checkBoard())
    let container = document.createElement('div')
    button2.innerHTML='Sprawdź'
    button2.setAttribute("class", 'button')
    container.appendChild(button)
    container.appendChild(document.createElement('br'))
    container.appendChild(button2)
    container.setAttribute("class", 'buttonsContainer')
    document.body.appendChild(container)
        
}
const clickFunc =(elem)=>{
    if(mouseFlag){
        elem.style.backgroundColor=currentColor
    }
}
const siema =(elem)=>{
    if(elem.style.backgroundColor == 'blue'){
        currentColor='white'
    }
    else{
        currentColor='blue'
    }
    elem.style.backgroundColor=currentColor
}
const addToCounter =()=>{
    counter++
    document.getElementById('counter').innerHTML=`Liczba prób: ${counter}`
}
const mocking=()=>{
    let p = document.getElementById('badAnswer')
    
    p.innerHTML = `Jesteś wśród ${getRandomInt(1,10)}% osób którzy nie potrafią tego rozwiązać`
    let image = document.getElementById("twoHead")
    image.src='images/twoHead.jpg'
}
const getRandomInt=(min, max)=> {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
const checkBoard=()=>{
    rows = config.rows
    columns = config.columns
    if(cellCount != rows.length || cellCount!= columns.length){
        window.alert('Zła konfiguracja')
    }
    for(let i = 0; i < cellCount; i++){
        if(!chceckRow(rows[i],i)){
            window.alert('Źle!')
            mocking()
            addToCounter()
            return false
        }
    }
    for(let i = 0; i < cellCount; i++){
        if(!chceckColumn(columns[i],i)){
            window.alert('Źle!')
            return false
        }
    }
    document.writeln(`Gratulacje! Zagadka rozwiązana w ${counter} próbach`)
    console.log('Brawo wygrałeś!')
    window.alert('Brawo wygrałeś!')
}
const chceckRow =(r,i)=>{
    p=0
    for(let ii = 0;ii<r.length; ii++){
        first = null
        for(let j=p; j<cellCount;j++){
            if(first ==null && tab2[i][j].style.backgroundColor=='blue'){
                first=j
            }
        }
        if(first == null){
            return false;
        }
        for(let j=first; j < first + r[ii];j++){
            if(j>=cellCount){
                return false
            }
            if(tab2[i][j].style.backgroundColor!='blue'){
                return false
            }

            p=j+1
        }
        if(p < cellCount && tab2[i][p].style.backgroundColor=='blue'){
            return false
        }
    } 
    return true;
}

const chceckColumn =(c,i)=>{
    p=0
    for(let ii = 0;ii<c.length; ii++){
        first = null
        for(let j=p; j<cellCount;j++){
            if(first ==null && tab2[j][i].style.backgroundColor=='blue'){
                first=j
            }
        }
        if(first == null){
            return false;
        }
        for(let j=first; j < first + c[ii];j++){
            if(j>=cellCount){
                return false
            }
            if(tab2[j][i].style.backgroundColor!='blue'){
                return false
            }

            p=j+1
        }
        if(p < cellCount && tab2[p][i].style.backgroundColor=='blue'){
            return false
        }
    }
    return true;
}
const prepareColumnConfig=()=>{
    let confColumns = []
    let bigDiv=document.createElement('div')
    bigDiv.setAttribute("class", 'confColumnsContainer')
    for(let i=0;i<cellCount;i++){
        confColumns[i] = document.createElement("div")
        confColumns[i].setAttribute("class", 'confCell')
        text=''

        for(let j=0;j<config.columns[i].length;j++){
            
            text+=(config.columns[i][j]).toString()+'\n'
        }
        if(config.columns[i].length==1){
            text+='\n\n'
        }
        if(config.columns[i].length==2){
            text+='\n'
        }
        confColumns[i].innerText+=text
        bigDiv.appendChild(confColumns[i])
    }
    document.body.appendChild(bigDiv)
}
const prepareRowConfig=()=>{
    let confRows=[]
    let bigDiv = document.createElement('div')
    bigDiv.setAttribute("class", 'confRowsContainer')
    for(let i = 0; i <cellCount;i++){
        confRows[i] = document.createElement('div')
        confRows[i].setAttribute("class", 'confRowCell')
        let span = document.createElement('span')
        let text=''
        for(let j=0; j<config.rows[i].length;j++){
            text+=config.rows[i][j].toString() +' '
        }
        span.innerHTML=text
        confRows[i].appendChild(span)
        bigDiv.appendChild(confRows[i])
    }
    document.body.appendChild(bigDiv)
}
const regulamin=()=>{

}
const prepareBoard=()=>{
    prepareColumnConfig()
    prepareRowConfig()
    let bigDiv = document.createElement('div')
    bigDiv.setAttribute("class", 'boardContainer')
    for(let i=0;i<cellCount;i++){
        let p = document.createElement("div")
        p.setAttribute("class",'rowGame')
        tab.push(p)
        tab2.push([])
        for(j=0;j<cellCount;j++){
            let s = document.createElement("div")
            s.setAttribute("class", 'cell')
            s.setAttribute('onmouseover','clickFunc(this)')
            s.setAttribute('onmousedown', 'siema(this)')
            s.setAttribute('onkeypress', 'onCellKeyPress(this)')
            tab2[i].push(s)
            tab[i].appendChild(s)
        }
        bigDiv.appendChild(tab[i])
    }
    document.body.appendChild(bigDiv)
    tab2[focused.x][focused.y].style.borderColor='red'
}

const getUserName = ()=>{
    name = window.prompt('Wprowadź swoją nazwę')
    document.open()
    document.write('<h1>' + name + ', czy zdołasz rozwiązać tę zagadkę?</h1>')
    document.close()
}
const getBoardSize = ()=>{
    sizeS = window.prompt('Wprowadz wymiar obrazka (dla 10: 10x10)')
    cellCount = parseInt(sizeS)
}
getUserName()
//getBoardSize()
prepareBoard()
makeButton()

