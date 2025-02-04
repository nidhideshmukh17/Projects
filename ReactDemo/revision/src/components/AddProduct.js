import { useState } from "react";

function AddProduct(props){

    let [txtName,setTxtName]=useState();
    let [txtPrice,setTxtPrice]=useState();

    function nameChange(event){
        setTxtName(event.currentTarget.value);
        // console.log(txtName);
    }
    function priceChange(event){
        setTxtPrice(event.currentTarget.value);
        // console.log(txtPrice);
    }
    function funAdd(){
        // console.log(txtName,txtPrice);
        let obj = {prodName:txtName, prodPrice:txtPrice};
        // console.log(obj);
        props.getNewObj(obj);
    }

    return(
        <>
           <form>
             ProductName : <input type="text" onChange={nameChange}/><br/>
             ProductPrice : <input type="text" onChange={priceChange}/><br/>
            <input type="button" value="AddProduct" onClick={funAdd}/>
           </form>
        </>
    )
}
export default AddProduct;