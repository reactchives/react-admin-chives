
// ** Hooks
import UserList from '../Enginee/index'

const AppChat = () => {
    // ** States
    const backEndApi = "form_menuone.php"
    
    return (
        <UserList backEndApi={backEndApi} externalId=''/>
    )
}


export default AppChat
