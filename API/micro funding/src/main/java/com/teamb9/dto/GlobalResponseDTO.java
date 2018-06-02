package com.teamb9.dto;

import com.fasterxml.jackson.annotation.JsonProperty;

@SuppressWarnings("serial")
@javax.annotation.Generated(value = "io.swagger.codegen.languages.SpringCodegen", date = "2017-02-22T09:10:51.747Z")
public class GlobalResponseDTO implements java.io.Serializable {

	@JsonProperty("Message")
	private String message;

	public String getMessage() {
		return message;
	}

	public void setMessage(String message) {
		this.message = message;
	}

}
