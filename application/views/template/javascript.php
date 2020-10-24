<script>

String.prototype.translateRequestStatus = function(isRTL) {
    if(!isRTL) {
        var obj = {
            pending: "Pending",
            paid: "Paid",
            rejected: "Rejected",
        };
        return obj[this];
    }
    else {
        var obj = {
            pending: "قيد الانتظار",
            paid: "مدفوع",
            rejected: "مرفوض",

        };
        return obj[this];
    }
}
String.prototype.translateOrderStatus = function(isRTL) {
    if(!isRTL) {
        var obj = {
            pending_refund: "Penidng Refund",
            pending_payment: "Pending Payment",
            rejected: "Rejected",
            init: "Initialized",
            valid: "Valid",
            refunded: "Refunded",
            paid: "Paid"
        };
        return obj[this];
    }
    else {
        var obj = {
            pending_refund: "قيد إرجاع المبلغ",
            pending_payment: "قيد الدفع",
            rejected: "مرفوض",
            init: "منشئ",
            valid: "معلومات صحيحة",
            refunded: "تم إرجاع المبلغ",
            paid: "مدفوع"
        };
        return obj[this];
    }
}
String.prototype.translateRole = function(isRTL) {
    if(!isRTL) {
        var obj = {
            'system': 'System Supervisor',
            'admin': 'System Admin',
            'provider': 'Service Provider',
            'both': 'Provider and Admin'
        };
        return obj[this];
    }
    else {
        var obj = {
            'system': 'مشرف نظام',
            'admin': 'مدير نظام',
            'provider': 'مقدم خدمة',
            'both': 'مقدم خدمة ومدير نظام'
        };
        return obj[this];
    }
}
String.prototype.translateSource = function(isRTL) {
    if(!isRTL) {
        var obj = {
            'client_app': "Clinic App",
            'client_web': "Clinic Web",
            'manager_app': "Manager App",
            'manager_web': "Manager Web",
            'master_app': "Master App",
            'master_web': "Master Web"
        };
        return obj[this];
    }
    else {
        var obj = {
            'client_app': "تطبيق العميل",
            'client_web': "موقع العميل",
            'manager_app': "تطبيق المانجر",
            'manager_web': "موقع المانجر",
            'master_app': "تطبيق إدارة العيادات",
            'master_web': "موقع ادارة العيادات"
        };
        return obj[this];
    }
}
String.prototype.translateStatus = function(isRTL) {
    if(!isRTL) {
        return this.charAt(0).toUpperCase() + this.slice(1);;
    }
    else {
        var obj = {
            'pending': 'قيد الانتظار',
            'approved': 'مؤكد',
            'completed': 'مكتمل',
            'cancelled': 'ملغي',
            'rejected': 'مرفوض',
            'absent': 'لم يحضر العميل',
        };
        return obj[this];
    }
}
String.prototype.orderIntoLabel = function(status) {
    var colors = {
        'pending_refund': 'bg-blue-grey',
        'pending_payment': 'bg-blue-grey',
        'paid': 'label-success',
        'valid': 'label-primary',
        'refunded': 'label-info',
        'rejected': 'label-danger'
    };
    return '<span class="label ' + colors[status] + '">' + this + '</span>';
}
String.prototype.balanceIntoLabel = function(status) {
    var colors = {
        'pending': 'bg-blue-grey',
        'paid': 'label-success',
        'rejected': 'label-danger',
    };
    return '<span class="label '+colors[status]+'">' + this + '</span>';
}
String.prototype.intoLabel = function(status) {
    var colors = {
        'pending': 'label-grey',
        'approved': 'label-success',
        'completed': 'label-primary',
        'cancelled': 'label-warning',
        'rejected': 'label-danger',
        'absent': 'bg-info',
    };
    return '<span class="label '+colors[status]+'">' + this + '</span>';
}
function arabicDigitsToHindi(string) {
    var symbolMap = {
        '1': '١',
        '2': '٢',
        '3': '٣',
        '4': '٤',
        '5': '٥',
        '6': '٦',
        '7': '٧',
        '8': '٨',
        '9': '٩',
        '0': '٠'
    };
    var result = string.replace(/[1234567890]/g, function (match) {
        return symbolMap[match];
    });
    result = result.replace('AM', ' ص');
    result = result.replace('PM', ' م');
    return result;
}
</script>