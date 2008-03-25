/**
 *  TypoScript Fixture 05
 *
 *  This fixture serves for testing confinements
 *
 */
namespace: default = F3_TYPO3_TypoScript
 
firstObject = Text
firstObject {
	value = "Go outside. The graphics are AMAZING!"
}

secondObject {
	subObject = Text
	subObject.value = "27°C and a blue sky."
}

thirdObject {
	subObject {
		subSubObject {
			someMessage = Text
			someMessage.value = "Fully or hard tail?"
		}
	}
}
