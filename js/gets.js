theras = {
    "lollo": "kello"
}
console.log("id");// sen datan
let ajax = new XMLHttpRequest();
ajax.onload = function(){
    data = JSON.parse(this.responseText);
    console.log(data)
    let adds = data[0].numero;
    let a = data[1].numero;
    let b = data[2].numero;
    let c = data[3].numero;
    let d = data[4].numero;
    let e = data[5].numero;
    let f = data[6].numero;
    let g = data[7].numero;
    let h = data[8].numero;
    let i = data[9].numero;
    let j = data[10].numero;
    let k = data[11].numero;
    let l = data[12].numero;
    let m = data[13].numero;
    let n = data[14].numero;
    let o = data[15].numero;
    let p = data[16].numero;
    let q = data[17].numero;
    let r = data[18].numero;
    let s = data[19].numero;
    let t = data[20].numero;
    let u = data[21].numero;
    let v = data[22].numero;
    let w = data[23].numero;
    let x = data[24].numero;
    let y = data[25].numero;
    let z = data[26].numero;
    let aa = data[27].numero;
    let bb = data[28].numero;
    let cc = data[29].numero;
    let dd = data[30].numero;
    let ee = data[31].numero;
    let gg = data[33].numero;
    let hh = data[34].numero;
    let ii = data[35].numero;
    let jj = data[36].numero;
    let kk = data[37].numero;
    let ll = data[38].numero;
    let mm = data[39].numero;
    let nn = data[40].numero;
    let oo = data[41].numero;
    let pp = data[42].numero;
    let qq = data[43].numero;
    let rr = data[44].numero;
    let ss = data[45].numero;
    let tt = data[46].numero;
    let uy = data[47].numero;
    let vv = data[48].numero;
    let ww = data[49].numero;
    let xx = data[50].numero;
    let yy = data[51].numero;
    let zz = data[52].numero;




    document.getElementById("adds").innerHTML = "(" + adds + ")"
    document.getElementById("a").innerHTML = "(" + a + ")";
    document.getElementById("b").innerHTML = "(" + b + ")";
    document.getElementById("c").innerHTML = "(" + c + ")";
    document.getElementById("d").innerHTML = "(" + d + ")";
    document.getElementById("e").innerHTML = "(" + e + ")";
    document.getElementById("f").innerHTML = "(" + f + ")";
    document.getElementById("g").innerHTML = "(" + g + ")";
    document.getElementById("h").innerHTML = "(" + h + ")";
    document.getElementById("i").innerHTML = "(" + i + ")";
    document.getElementById("j").innerHTML = "(" + j + ")";
    document.getElementById("k").innerHTML = "(" + k + ")";
    document.getElementById("l").innerHTML = "(" + l + ")";
    document.getElementById("m").innerHTML = "(" + m + ")";
    document.getElementById("n").innerHTML = "(" + n + ")";
    document.getElementById("o").innerHTML = "(" + o + ")";
    document.getElementById("p").innerHTML = "(" + p + ")";
    document.getElementById("q").innerHTML = "(" + q + ")";
    document.getElementById("r").innerHTML = "(" + r + ")";
    document.getElementById("s").innerHTML = "(" + s + ")";
    document.getElementById("t").innerHTML = "(" + t + ")";
    document.getElementById("u").innerHTML = "(" + u + ")";
    document.getElementById("v").innerHTML = "(" + v + ")";
    document.getElementById("w").innerHTML = "(" + w + ")";
    document.getElementById("x").innerHTML = "(" + x + ")";
    document.getElementById("y").innerHTML = "(" + y + ")";
    document.getElementById("z").innerHTML = "(" + z + ")";
    document.getElementById("aa").innerHTML = "(" + aa + ")";
    document.getElementById("bb").innerHTML = "(" + bb + ")";
    document.getElementById("cc").innerHTML = "(" + cc + ")";
    document.getElementById("dd").innerHTML = "(" + dd + ")";
    document.getElementById("ee").innerHTML = "(" + ee + ")";

    document.getElementById("gg").innerHTML = "(" + gg + ")";
    document.getElementById("hh").innerHTML = "(" + hh + ")";
    document.getElementById("ii").innerHTML = "(" + ii + ")";
    document.getElementById("jj").innerHTML = "(" + jj + ")";
    document.getElementById("kk").innerHTML = "(" + kk + ")";
    document.getElementById("ll").innerHTML = "(" + ll + ")";
    document.getElementById("mm").innerHTML = "(" + mm + ")";
    document.getElementById("nn").innerHTML = "(" + nn + ")";
    document.getElementById("oo").innerHTML = "(" + oo + ")";
    document.getElementById("pp").innerHTML = "(" + pp + ")";
    document.getElementById("qq").innerHTML = "(" + qq + ")";
    document.getElementById("rr").innerHTML = "(" + rr + ")";
    document.getElementById("ss").innerHTML = "(" + ss + ")";
    document.getElementById("tt").innerHTML = "(" + tt + ")";
    document.getElementById("uy").innerHTML = "(" + uy + ")";
    document.getElementById("vv").innerHTML = "(" + vv + ")";
    document.getElementById("ww").innerHTML = "(" + ww + ")";
    document.getElementById("xx").innerHTML = "(" + xx + ")";
    document.getElementById("yy").innerHTML = "(" + yy + ")";
    document.getElementById("zz").innerHTML = "(" + zz + ")";
 





}
ajax.open("POST", "../ware/searchs.php");
ajax.send("theras");


