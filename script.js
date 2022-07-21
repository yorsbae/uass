let tkp = document.querySelector('input[name="nilai_tkp"]')
let tiu = document.querySelector('input[name="nilai_tiu"]')
let tkw = document.querySelector('input[name="nilai_tkw"]')
let nama = document.querySelector('input[name="nama"]')
let no_pend = document.querySelector('input[name="no_pend"]')
let input = document.querySelector('button[name="simpan"]')
let tableLihat = document.querySelector('.lihat')


input.addEventListener('click', (e) => {
    e.preventDefault()
    if(tkp.value >= 126){
        alert('Selamat TKP anda lulus')
    }else{
        alert(`Maaf anda tidak lulus, minimal kelulusan untuk TKP adalah 126, nilai anda ${tkp.value}`)
    }

    if(tiu.value >= 80){
        alert('Selamat TIU anda lulus')
    }else{
        alert(`Maaf anda tidak lulus, minimal kelulusan untuk TIU adalah 126, nilai anda ${tiu.value}`)
    }

    if(tkw.value >= 65){
        alert('Selamat TKW anda lulus')
    }else{
        alert(`Maaf anda tidak lulus, minimal kelulusan untuk TKW adalah 65, nilai anda ${tkw.value}`)
    }
    let data = {
        nama : nama.value,
        no_pend : no_pend.value,
        tkp : tkp.value,
        tiu : tiu.value,
        tkw : tkw.value
    }
    
    $.ajax({
        type: "POST",
        url: 'simpan.php',
        data: data,
        success: (res) => {
            if(res == "Berhasil"){
                tableLihat.innerHTML += `
                    <tr>
                        <td>${data.no_pend}</td>
                        <td>${data.nama}</td>
                        <td>${data.tkp}</td>
                        <td>${data.tiu}</td>
                        <td>${data.tkw}</td>
                        <td><button onclick="konfirmhapus('${data.no_pend}');">hapus</button>
                        <button onclick="window.location='edit.php?no_pend=${data.no_pend}'">edit</button>
                    </td>
                `
            }
        }
    });

})