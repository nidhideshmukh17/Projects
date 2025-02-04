import mybutton from './components/Button.module';

function Button(props) {
  // var text=props.text;
  // var type=props.type;

  function funEvent(event){
    if(event.type === "mouseover") {
      event.currentTarget.style.backgroundColor="blue";
    }
    else  if (event.type === "mouseout") {
      event.currentTarget.style.backgroundColor="yellow";
    }
    else if(event.type==="click"){
      alert("its clicked");
    }
  }
    return (
      <>
      
        <button type={props.type} className={mybutton.btn} onClick={funEvent} onMouseOver={funEvent} onMouseOut={funEvent}>{props.text}</button>
      
      </>
    )
  }
  
  export default Button;