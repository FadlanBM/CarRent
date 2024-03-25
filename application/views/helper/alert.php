<?php
$success_message = $this->session->flashdata('success');
if ($success_message) {
    echo "
<script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            iconColor: 'white',
            color: '#fff',
            timerProgressBar: true,
            background: '#a5dc86',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: '$success_message'
        })
</script>";
}

$error_message = $this->session->flashdata('error');
if ($error_message) {
    echo "
 <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            iconColor: 'white',
            color: '#fff',
            background: '#f27474',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: '$error_message'
        })
    </script>";
}
?>
