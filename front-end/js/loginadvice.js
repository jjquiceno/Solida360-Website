console.log('esta es la consola');
const userBox = document.getElementById('user');
const userContent = document.getElementById('usercontent');
const logoutButton = document.getElementById('logoutbutton');
const login = document.getElementById('loginButton');
const config = document.getElementById('configButton');
const cob = document.getElementById('cob');

cob.addEventListener("click", () => {
    window.location.href = "../t e m p l a t e s/config.html";
})
login.addEventListener("click", () => {
    const cerrarAlerta = document.getElementById('cerrar-alert');
    const caja = document.getElementById('containerAlert');
    caja.style.display = 'none';
    setTimeout(function() {
        caja.style.display = 'flex';
        setTimeout(function(){
            caja.style.opacity = '1';
        }, 100);
    }, 100);
    cerrarAlerta.addEventListener('click', () => {
        caja.style.opacity = '0';
        setTimeout(function() {
            caja.style.display = 'none';
        }, 500);
    });
})
function checkStatus(){
    const nameSesion = document.getElementById('nameSesion').textContent.trim();
    if (nameSesion === "") {
        console.log('se inició sesión');
        userBox.style.display = 'block';
        userContent.style.display = 'block';
        logoutButton.style.display = 'none';
        config.style.display = 'none'
        window.onload = function() {
            const cerrarAlerta = document.getElementById('cerrar-alert');
            const caja = document.getElementById('containerAlert');
            caja.style.display = 'none';
            setTimeout(function() {
                caja.style.display = 'flex';
                setTimeout(function(){
                    caja.style.opacity = '1';
                }, 2000);
            }, 2000);
            cerrarAlerta.addEventListener('click', () => {
                caja.style.opacity = '0';
                setTimeout(function() {
                    caja.style.display = 'none';
                }, 500);
            });
        };
    } else {
        const caja = document.getElementById('containerAlert');
        caja.style.display = 'none';
        // logoutButton.style.display = 'none';
        userContent.style.display = 'none';
        login.style.display = 'none';
        config.style.display = 'block';
        userBox.style.display = 'block';
    }
}
checkStatus();
