//let apiMainUrl = "https://x8ki-letl-twmt.n7.xano.io/api:Yxq2vVpQ";
//ukoliko neko zeli da testira funkcionalnost login-a i register-a neka izbrise komentar ove gore linije let apiMainUrl...

if(document.getElementById('registerBtn')){
    document.getElementById('registerBtn').onclick = function(e){
        e.preventDefault();
    
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let password = document.getElementById('password').value;
        let repeat_password = document.getElementById('repeat_password').value;
    
        let apiEndpoint = apiMainUrl + "/auth/signup";
        
        let requestBody = {
            name,
            email,
            phone,
            password,
            repeat_password
        }
        fetch(apiEndpoint,{
            method: 'POST',
            headers:{
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(requestBody)
        })
        .then(response=>response.json())
        .then(data=>{
            if(data.authToken){
                localStorage.setItem('authToken',data.authToken);
                window.location.href = 'index.html'
            }
        });
    };
}
if(document.getElementById('loginBtn')){
    document.getElementById('loginBtn').onclick = function(e){
        e.preventDefault();

        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        let apiEndpoint = apiMainUrl + "/auth/login";
        let requestBody = {
            email,
            password
        }
        fetch(apiEndpoint,{
            method: 'POST',
            headers:{
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(requestBody)
        })
        .then(response=>response.json())
        .then(data=>{
            if(data.authToken){
                localStorage.setItem('authToken',data.authToken);
                window.location.href = 'index.html'
            }
        });
    }
}

if(localStorage.getItem('authToken')){
    // document.getElementById('navigation').innerHTML = `<a href="novi_oglas.html" class="btn btn-warning">Dodaj oglas</a> 
    //                                                    <a href="#" id="odjaviSe" class="btn btn-info">Odjavi se</a>`

    document.getElementById('odjaviSe').onclick = function(e){
        e.preventDefault();
        localStorage.clear();
        window.location.href = 'index.html';
    }
}