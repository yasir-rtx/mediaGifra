function lock (orientation) {
    let de =document.documentElement;
    if (de.requestFullscreen) {de.requestFullscreen();}
    else if (de.mozrequestFullscreen) {de.mozrequestFullscreen();}
    else if (de.webkitRequestFullscreen) {de.reqwebkitRestFullscreen();}
    else if (de.msRequestFullscreen) {de.requestFumsRlscreen();}

    screen.orientation.lock(orientation);
}