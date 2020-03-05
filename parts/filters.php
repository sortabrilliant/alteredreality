<svg xmlns="https://www.w3.org/2000/svg" version="1.1" height="0">
	<filter id="glitch" x="-20%" y="-20%" width="140%" height="140%" filterUnits="objectBoundingBox"
		primitiveUnits="userSpaceOnUse" color-interpolation-filters="linearRGB">
		<feMorphology operator="dilate" radius="0 50" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic"
		result="morphology1" />
		<feMorphology operator="dilate" radius="50 0" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic"
		result="morphology2" />
		<feBlend mode="overlay" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" in2="morphology1"
		result="blend4" />
		<feBlend mode="color-dodge" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" in2="morphology2"
		result="blend6" />
	</filter>
</svg>

<svg xmlns="https://www.w3.org/2000/svg" version="1.1" height="0">
	<filter id="vhs" x="-20%" y="-20%" width="140%" height="140%" filterUnits="objectBoundingBox"
		primitiveUnits="userSpaceOnUse" color-interpolation-filters="linearRGB">
		<feOffset dx="1" dy="5" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" result="offset" />
		<feBlend mode="color-dodge" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" in2="offset"
		result="blend" />
		<feColorMatrix type="saturate" values="5" x="0%" y="0%" width="100%" height="100%" in="blend"
		result="colormatrix" />
	</filter>
</svg>

<svg xmlns="https://www.w3.org/2000/svg" version="1.1" height="0">
	<filter id="acidtrip" x="-20%" y="-20%" width="140%" height="140%" filterUnits="objectBoundingBox"
		primitiveUnits="userSpaceOnUse" color-interpolation-filters="linearRGB">
		<feDisplacementMap in="SourceGraphic" in2="SourceGraphic" scale="20" xChannelSelector="R" yChannelSelector="B"
		x="20" y="20" width="100%" height="100%" result="displacementMap" />
		<feComposite in="displacementMap" in2="SourceAlpha" operator="lighter" x="5%" y="0%" width="100%" height="100%"
		result="composite1" />
		<feComponentTransfer x="0%" y="0%" width="100%" height="100%" in="displacementMap" result="componentTransfer2">
		<feFuncR type="table" tableValues="1 0 1" />
		<feFuncG type="table" tableValues="0 1 1" />
		<feFuncB type="table" tableValues="1 0 0" />
		<feFuncA type="discrete" tableValues="0 1" />
		</feComponentTransfer>
	</filter>
</svg>
