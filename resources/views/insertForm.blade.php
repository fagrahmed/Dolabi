<!DOCTYPE html>
<html>  
    <head>  
        <title>Insert Form</title>
    </head>
    <body>
    <center>  
            <form action="/insertForm" method="POST">
                @csrf
                <table> 
                    <tr>    
                        <td>Name:    </td>
                        <td><input type="text" name="name">    </td>
                    </tr>
                    <tr>    
                        <td>Email:    </td>
                        <td><input type="text" name="email">    </td>
                    </tr>
                    <tr>    
                        <td>Password:    </td>
                        <td><input type="text" name="password">    </td>
                    </tr>
                    <tr>    
                        <td>Gender:    </td>
                        <td><input type="text" name="gender">    </td>
                    </tr>
                    <tr>    
                        <td><button type="submit">Sign Up</td>
                    </tr>
    
                </table>
            </form>
    </center>

        @if($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>   
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html>