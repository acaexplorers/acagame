const cvs=document.getElementById("main");
const ctx=cvs.getContext("2d");

// load images 

const background= new Image();
const birdimage= new Image();
birdimage.src="images/bird.png";
background.src= "images/background.png";

// press butons functions 


let keys={ArrowRight : false}


document=addEventListener('keydown',keyDown);
document=addEventListener('keyup',keyUp);

function keyDown(e){
  
    e.preventDefault();
    keys[e.key]=true;
    console.log(e.key);
    console.log(keys);
}

function keyUp(e){
	e.preventDefault();
	keys[e.key]=false;
    console.log(e.key);
    console.log(keys);
}

// set bird positionn 

let bird ={
	x:210,
	y:375
}
let birdx=bird.x;
let birdy=bird.y;
let point=0;

// draw everything in canvas 

function draw(){ 
	
	if (keys.ArrowRight){

		switch(point){
         case 0:
               bird.x=250;
               bird.y=420;
               point+=1;
         break;      
         case 1:
               bird.x=300;
               bird.y=420;
               point+=1;
         break;      
         case 2:
               bird.x=330;
               bird.y=377;
               point+=1;
         break;
         case 3:
               bird.x=310;
               bird.y=320;
               point+=1;
         break;
         case 4:
               bird.x=269;
               bird.y=277;
               point+=1;           
         break;
         case 5:
               bird.x=213;
               bird.y=248;
               point+=1;
         break;
         case 6:
               bird.x=172;
               bird.y=180;
               point+=1;
         break;
         case 7:
               bird.x=183;
               bird.y=115;
               point+=1; 
         break;
         case 8:
               bird.x=240;
               bird.y=70;
               point+=1;  
         break;
         case 9:
               bird.x=310;
               bird.y=50;
               point+=1; 
         break;
         case 10:
               bird.x=377;
               bird.y=85;
               point+=1;   
         break;
         case 11:
               bird.x=400;
               bird.y=145;
               point+=1; 
         break;
         case 12:
               bird.x=400;
               bird.y=210;
               point+=1;
         break;
         case 13:
               bird.x=377;
               bird.y=275;
               point+=1;
         break;
         case 14:
               bird.x=382;
               bird.y=352;
               point+=1;

         break;      
         case 15:
               bird.x=440;
               bird.y=384;
               point+=1;
         break;      
         case 16:
               bird.x=490;
               bird.y=355;
               point+=1;
         break;
         case 17:
               bird.x=450;
               bird.y=290;
               point+=1;
         break;
         case 18:
               bird.x=480;
               bird.y=233;
               point+=1;           
         break;
         case 19:
               bird.x=547;
               bird.y=253;
               point+=1;
         break;
         case 20:
               bird.x=558;
               bird.y=319;
               point+=1;
         break;
         case 21:
               bird.x=562;
               bird.y=390;
               point+=1; 
         break;
         case 22:
               bird.x=625;
               bird.y=430;
               point+=1;  
         break;
         case 23:
               bird.x=685;
               bird.y=418;
               point+=1; 
         break;
         case 24:
               bird.x=740;
               bird.y=370;
               point+=1;   
         break;
         case 25:
               bird.x=747;
               bird.y=300;
               point+=1; 
         break;
         case 26:
               bird.x=700;
               bird.y=240;
               point+=1;
         break;
         case 27:
               bird.x=635;
               bird.y=225;
               point+=1;
         break;
         case 28:
               bird.x=565;
               bird.y=200;
               point+=1;
         break;
         case 29:
               bird.x=510;
               bird.y=175;
               point+=1; 
         break;
         case 30:
               bird.x=490;
               bird.y=105;
               point+=1;   
         break;
         case 31:
               bird.x=526;
               bird.y=57;
               point+=1; 
         break;
         case 32:
               bird.x=600;
               bird.y=41;
               point+=1;
         break;
         case 33:
               bird.x=653;
               bird.y=83;
               point+=1;
         break;
         case 34:
               bird.x=653;
               bird.y=143;
               point+=1;
         break;
         case 35:
               bird.x=210;
               bird.y=375;
               point=0;            




     }
	}

		
    
	ctx.drawImage(background,0,0);
    ctx.drawImage(birdimage,bird.x,bird.y,50,50);
}



// call draw function 


	let game= setInterval(draw,100);




