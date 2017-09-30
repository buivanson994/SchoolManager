$(function () {

    $menu = "";
    $themsuaxoa = "";
    // MenuClick();
    // //KiemTraNutThemSuaXoa();
    // KiemTraTextBox();

    function kiemTraTextBox() {
        varvalidator = $("#input_form").validate({
            rules: {
                username: "required",
                password: {
                    required: true,
                    minlength: 6,
                },
                cpassword: {
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                username: "Hãyđiềntênđăngnhập.",
                password: {
                    required: "Hãyđiềnmậtkhẩu",
                    minlength: "Mậtkhẩuítnhất6kýtự"
                },
                cpassword: {
                    equalTo: "Mậtkhẩuxácnhậnkhôngchínhxác"
                },
                email: {
                    required: "Hãynhập1địachỉemailhợplệ",
                    email: "Địachỉemailkhônghợplệ"
                }
            }
        });
    }

    function menuClick() {
        $(".subdiv").on('click', function () {
            menu = $(this).attr('button');
            switch (menu) {
                case"SV":
                    loadtrang("SinhVien.php");
                    break;
                case"K":
                    loadtrang("Khoa.php");
                    break;
                case"L":
                    loadtrang("Lop.php");
                    break;
                case"MH":
                    loadtrang("TrangChung.php");
                    break;
                case"TB":
                    loadtrang("ThongBao.php");
                    break;
            }
        });
    }

    function kiemTraNutThemSuaXoa() {
        $('#Content.btn').on('click', function (event) {
            themsuaxoa = $(this).attr('button');
            switch (menu) {
                case"SV":
                    ThemSuaXoa(themsuaxoa);
                    break;
                case"K":
                    ThemSuaXoa(themsuaxoa);
                    break;
                case"L":
                    ThemSuaXoa(themsuaxoa);
                    break;
                case"MH":
                    ThemSuaXoa(themsuaxoa);
                    break;
                case"TB":
                    ThemSuaXoa(themsuaxoa);
                    break;
            }
        });
    }

    function ThemSuaXoa(state) {
        switch (state) {
            case"Them":
                loadtrang("Them.php");
                break;
            case"Sua":
                loadtrang("Sua.php");
                break;
            case"Xoa":
                loadtrang("Xoa.php");
                break;
            default:
                //statements_def
                break;
        }
    }

    function loadtrang(page) {
        $.post(page, function (data) {
            $('#Content').html(data);
        });
    }
});
