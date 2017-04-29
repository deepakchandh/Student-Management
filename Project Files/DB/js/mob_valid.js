<script>
onfunction()
(










var val = pmob_number.value
if (/^\d{10}$/.test(val)) {
    // value is ok, use it
} else {
    alert("Invalid number; must be ten digits")
    pmob_number.focus()
    return false
}
}



</script>   