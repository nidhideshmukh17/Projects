import stbtn from './Mybtn.module.css';

function Mybtn(props){

    // let text = props.text;
    // let type = props.type;

    function funEvent(event){
        if(event.type ===  "mouseover"){
            event.currentTarget.style.backgroundColor= "lightgreen";
        }
        else if(event.type === "mouseout"){
            event.currentTarget.style.backgroundColor= "pink";
        }
        else if(event.type === "click"){
            alert("Login successfully!!");
        }
    }
    
    return(
        <>
            <button type={props.type} className={stbtn.btn} onClick={funEvent} onMouseOut={funEvent} onMouseOver={funEvent}>{props.text}</button>
        </>
    )
}
// to avoid the class conflit problem we can use style.module.css
export default Mybtn;