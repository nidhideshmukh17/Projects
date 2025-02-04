import { Link } from "react-router-dom";

function Navigation(){
    return(
        <>
            <ul>
                <li>
                    <Link to="/">Home</Link>
                </li>
                <li>
                    <Link to="/user">New User</Link>
                </li>
                <li>
                    <Link to="/SignUp/:id/:str">SignUp</Link>
                </li>
                <li>
                    <Link to="/data">Details</Link>
                </li>
            </ul>
        </>
    )
}
export default Navigation;