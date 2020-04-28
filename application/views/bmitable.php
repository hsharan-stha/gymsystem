<?php include_once('link.php');?>
<?php include_once('header.php');?>
<style type="text/css">
	th{
  color: #ac8db7 !important;
}
</style>
<!-- require : halt script where include: only emits warning; -->
<div class="container-fluid" >
						
	<div class="panel panel-default" style="margin-top:10px;">
						<div class="col-lg-6" style="margin-top:20px;">
						<div class="form-group">
						<from class="form-inline" style="float:left ; margin-left:50px;">
						<label class="form-label" style="color: #00bff0;">ft to inchs:</label>
						<input type="text" class="form-control" id="ft" placeholder="ft" 
						style="width:70px; float:left; margin-right:5px;"/>
						<input type="text" class="form-control" id="inch" placeholder="inch" 
						style="width:70px; float:left; margin-right:5px;"/>
						<input type="button" class="btn btn-link" value="convert" onclick="convertinch()"/>
						<input type="text" class="form-control" id="inchs" placeholder="inchs" style="width:78px;"/>
						</from>
							</div>
							</div>

							<div class="col-lg-6" style="margin-top:20px;">
							<from class="form-inline" style="float:left ; margin-left:50px;">
						<div class="form-group">
						<label class="form-label" style="color: #00bff0;">kg to pounds:</label>
						<input type="text" class="form-control" id="kg" placeholder="kg" 
						style="width:70px; float:left; margin-right:5px;"/>
						<input type="button" class="btn btn-link" value="convert" onclick="convertpound()"/>
						<input type="text" class="form-control" id="pounds" placeholder="pounds" style="width:78px;"/>
							</div>
						</from>
						</div>
		<div class="panel-heading" style="margin-top:10px;" >
				<hr>
				<h2 class="btn btn-link center-block">BMI TABLE:</h2>
					</div>

				
	


		<div class="panel panel-body">
			<div class="table-responsive">
				<table class="table table-striped" id="menu" style="font-size: 12px;">
					<thead>
						<tr>
						<th>BMI</th><th>19</th><th>20</th><th>21</th><th>22</th><th>23</th><th>24</th><th>25</th><th>26</th><th>27</th><th>28</th><th>29</th><th>30</th><th>31</th><th>32</th><th>33</th><th>34</th><th>35</th><th>36</th><th>37</th><th>38</th><th>39</th><th>40</th>
						</tr>
						<tr>
						<th>
						<b>Height(inches)</b></th>
						<th colspan="33">
						
						<h4 align="center"><b>body weight(pounds) note(1kg=2.20462pounds)</b></h4>


						</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>58</th> 
							<td>91</td>									
							<td>96</th>
							<td>100</td>
							<td>105</td>
							<td>110</td>
							<td>115</td>
							<td>119</td>
							<td>124</td>
							<td>129</td>
							<td>134</td>
							<td>138</td>
							<td>143</td>
							<td>148</td>
							<td>153</td>
							<td>158</td>
							<td>162</td>
							<td>167</td>
							<td>172</td>
							<td>177</td>
							<td>181</td>
							<td>186</td>
							<td>191</td>
						</tr>
						<tr>
							<th>59</th>	
							<td>94</td>			
							<td>99</td>
							<td>104</td>
							<td>109</td>
							<td>114</td>
							<td>119</td>
							<td>124</td>
							<td>128</td>
							<td>133</td>
							<td>138</td>
							<td>143</td>
							<td>148</td>
							<td>153</td>
							<td>158</td>
							<td>163</td>
							<td>168</td>
							<td>173</td>
							<td>178</td>
							<td>183</td>
							<td>188</td>
							<td>193</td>
							<td>198</td>
						</tr>
						<tr>
							<th>60</th>
							<td>97</td>	
							<td>102</td>
							<td>107</td>
							<td>112</td>
							<td>118</td>	
							<td>123</td>
							<td>128</td>
							<td>133</td>
							<td>138</td>
							<td>143</td>
							<td>148</td>
							<td>153</td>
							<td>158</td>
							<td>163</td>
							<td>168</td>
							<td>174</td>
							<td>179</td>
							<td>184</td>
							<td>189</td>
							<td>194</td>
							<td>199</td>
							<td>204</td>
						</tr>
					<tr>
						<th>61</th>
						<td>100</td>
						<td>106</td>
						<td>111</td>
						<td>116</td>
						<td>122</td>
						<td>127</td>
						<td>132</td>
						<td>137</td>
						<td>143</td>
						<td>148</td>
						<td>153</td>
						<td>158</td>
						<td>164</td>
						<td>169</td>
						<td>174</td>
						<td>180</td>
						<td>185</td>
						<td>190</td>
						<td>195</td>
						<td>201</td>
						<td>206</td>
						<td>211</td>
					</tr>
					<tr>
						<th>62</th>
						<td>104</td>
						<td>109</td>
						<td>115</td>
						<td>120</td>
						<td>126</td>
						<td>131</td>
						<td>136</td>
						<td>142</td>
						<td>147</td>
						<td>153</td>
						<td>158</td>
						<td>164</td>
						<td>169</td>
						<td>175</td>
						<td>180</td>
						<td>186</td>
						<td>191</td>
						<td>196</td>
						<td>202</td>
						<td>207</td>
						<td>213</td>
						<td>218</td>
					</tr>
					<tr>
						<th>63</th>
						<td>107</td>
						<td>113</td>
						<td>118</td>
						<td>124</td>
						<td>130</td>
						<td>135</td>
						<td>141</td>
						<td>146</td>
						<td>152</td>
						<td>158</td>
						<td>163</td>
						<td>169</td>
						<td>175</td>
						<td>180</td>
						<td>186</td>
						<td>191</td
						><td>197</td>
						<td>203</td>
						<td>208</td>
						<td>214</td>
						<td>220</td>
						<td>225</td>
					</tr>
					<tr>
						<th>64</th>
						<td>110</td>
						<td>116</td>
						<td>122</td>
						<td>128</td>
						<td>134</td>
						<td>140</td>
						<td>145</td>
						<td>151</td>
						<td>157</td>
						<td>163</td>
						<td>169</td>
						<td>174</td>
						<td>180</td>
						<td>186</td>
						<td>192</td>
						<td>197</td>
						<td>204</td>
						<td>209</td>
						<td>215</td>
						<td>221</td>
						<td>227</td>
						<td>232</td>
						


					</tr>
					<tr>
						<th>65</th>
						<td>114</td>
						<td>120</td>
						<td>126</td>
						<td>132</td>
						<td>138</td>
						<td>144</td>
						<td>150</td>
						<td>156</td>
						<td>162</td>
						<td>168</td>
						<td>174</td>
						<td>180</td>
						<td>186</td>
						<td>192</td>
						<td>198</td>
						<td>204</td>
						<td>210</td>
						<td>216</td>
						<td>222</td>
						<td>228</td>
						<td>234</td>
						<td>240</td>

					</tr>
					<tr>
						<th>66</th>
						<td>118</td>
						<td>124</td>
						<td>130</td>
						<td>136</td>
						<td>142</td>
						<td>148</td>
						<td>155</td>
						<td>161</td>
						<td>167</td>
						<td>173</td>
						<td>179</td>
						<td>186</td>
						<td>192</td>
						<td>198</td>
						<td>204</td>
						<td>210</td>
						<td>216</td>
						<td>223</td>
						<td>229</td>
						<td>235</td>
						<td>241</td>
						<td>247</td>
					</tr>
					<tr>
						<th>67</th>
						<td>121</td>
						<td>127</td>
						<td>134</td>
						<td>140</td>
						<td>146</td>
						<td>153</td>
						<td>159</td>
						<td>166</td>
						<td>172</td>
						<td>178</td>
						<td>185</td>
						<td>191</td>
						<td>198</td>
						<td>204</td>
						<td>211</td>
						<td>217</td>
						<td>223</td>
						<td>230</td>
						<td>236</td>
						<td>242</td>
						<td>249</td>
						<td>255</td>
					</tr>
					<tr>
					<th>68</th>	
						<td>125</td>
						<td>131</td>
						<td>138</td>
						<td>144</td>
						<td>151</td>
						<td>158</td>
						<td>164</td>
						<td>171</td>
						<td>177</td>
						<td>184</td>
						<td>190</td>
						<td>197</td>
						<td>203</td>
						<td>210</td>
						<td>216</td>
						<td>223</td>
						<td>230</td>
						<td>236</td>
						<td>243</td>
						<td>249</td>
						<td>256</td>
						<td>262</td>
					</tr>
					<tr>
						<th>69</th>
						<td>128</td>
						<td>135</td>
						<td>142</td>
						<td>149</td>
						<td>155</td>
						<td>162</td>
						<td>169</td>
						<td>176</td>
						<td>182</td>
						<td>189</td>
						<td>196</td>
						<td>203</td>
						<td>209</td>
						<td>216</td>
						<td>223</td>
						<td>230</td>
						<td>236</td>
						<td>243</td>
						<td>250</td>
						<td>257</td>
						<td>263</td>
						<td>270</td>
					</tr>


      				<tr>
	      				<th>70</th>	
	      				<td>132</td>
	      				<td>139</td>
	      				<td>146</td>
	      				<td>153</td>
	      				<td>160</td>
	      				<td>167</td>
	      				<td>174</td>
	      				<td>181</td>
	      				<td>188</td>
	      				<td>195</td>
	      				<td>202</td>
	      				<td>209</td>
	      				<td>216</td>
	      				<td>222</td>
	      				<td>229</td>
	      				<td>236</td>
	      				<td>243</td>
						<td>250</td>
						<td>257</td>
						<td>264</td>
						<td>271</td>
						<td>278</td>
      				</tr>

					<tr>
						<th>71</th>
						<td>136</td>
						<td>143</td>	
						<td>150</td>
						<td>157</td>
						<td>165</td>
						<td>172</td>
						<td>179</td>
						<td>186</td>
						<td>193</td>
						<td>200</td>
						<td>208</td>
						<td>215</td>
						<td>222</td>
						<td>229</td>
						<td>236</td>
						<td>243</td>
						<td>250</td>
						<td>257</td>
						<td>265</td>
						<td>272</td>
						<td>279</td>
						<td>286</td>
					</tr>

						<tr>
							<th>72</th>
							<td>140</td>
							<td>147</td>
							<td>154</td>
							<td>162</td>
							<td>169</td>
							<td>177</td>
							<td>184</td>
							<td>191</td>
							<td>199</td>
							<td>206</td>
							<td>213</td>
							<td>221</td>
							<td>228</td>
							<td>235</td>
							<td>242</td>
							<td>250</td>
							<td>258</td>
							<td>265</td>
							<td>272</td>
							<td>279</td>
							<td>287</td>
							<td>294</td>
						</tr>
						<tr>
							<th>73</th>
							<td>144</td>
							<td>151</td>
							<td>159</td>
							<td>166</td>
							<td>174</td>
							<td>182</td>
							<td>189</td>
							<td>197</td>
							<td>204</td>
							<td>212</td>
							<td>219</td>
							<td>227</td>
							<td>235</td>
							<td>242</td>
							<td>250</td>
							<td>257</td>
							<td>265</td>
							<td>272</td>	
							<td>280</td>
							<td>288</td>
							<td>295</td>
							<td>302</td>
						</tr>

						<tr>
							<th>74</th>
							<td>148</td>
							<td>155</td>
							<td>163</td>
							<td>171</td>
							<td>179</td>
							<td>186</td>
							<td>194</td>
							<td>202</td>
							<td>210</td>
							<td>218</td>
							<td>225</td>
							<td>233</td>
							<td>241</td>
							<td>249</td>
							<td>256</td>
							<td>264</td>
							<td>272</td>
							<td>280</td>
							<td>287</td>
							<td>295</td>
							<td>303</td>
							<td>311</td>
						</tr>


					</tbody>
				</table>
			</div>

		</div>
	</div>

</div>
<?php include_once('footer.php');?>
<script type="text/javascript">
	function convertpound(){
		var kg=document.getElementById('kg').value;
		var result=kg*2.20462;
		document.getElementById('pounds').value=result;

	}

	function convertinch(){
		var ft=document.getElementById('ft').value;
		var inch=document.getElementById('inch').value;
		var ans=(ft*12) + (inch*1);
		document.getElementById('inchs').value=ans;
	}
	


</script>


<!-- <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
	var table=$('table'),
		thead=table.find('thead'),
		fixed_head;
		the_window=$(window);

		thead.find('td').each(function(){

			var el=$(this);
			el.css('width',el.width());
		});

		fixed_head=thead.clone().hide();
		thead.after(fixed_head);

		fixed_head.css({
			'position':'fixed',
			'top':0,
			
			'width':thead.width()

		});

		the_window.scroll(function(){
		if(the_window.scrollTop() > table.offset().top){	

			fixed_head.show();

		}else{
			fixed_head.hide();

		});

		if(the_window.scrollTop() > (table.offset().top + table.height()) - fixed_head.height()){
			fixed_head.hide();
		}

</script> -->